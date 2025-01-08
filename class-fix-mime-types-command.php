<?php
/**
 * Class Fix_Mime_Types_Command
 *
 * Handles the "wp fix-mime" WP-CLI command to update MIME types.
 *
 * @package fix-mime-types
 */

defined( 'ABSPATH' ) || exit;

/**
 * WP-CLI command class for "wp fix-mime".
 */
class Fix_Mime_Types_Command {

	/**
	 * Main subcommand: "wp fix-mime run".
	 *
	 * Processes all attachments in the Media Library and updates their MIME types if needed.
	 *
	 * @param array $args       Positional arguments (not used in this command).
	 * @param array $assoc_args Associative arguments (not used in this command).
	 *
	 * @return void
	 */
	public function run( $args, $assoc_args ) {
		// PHPCS warns if these parameters are not used at all, so we unset them.
		unset( $args, $assoc_args );

		// Query to get all attachments.
		$query_args = array(
			'post_type'      => 'attachment',
			'posts_per_page' => -1,
			'post_status'    => 'any',
		);

		$attachments = get_posts( $query_args );

		if ( ! $attachments ) {
			WP_CLI::success( __( 'No attachments found in the Media Library.', 'fix-mime-types' ) );
			return;
		}

		WP_CLI::log(
			sprintf(
				/* translators: %d: Number of attachments found. */
				__( 'Found %d attachments. Starting the process...', 'fix-mime-types' ),
				count( $attachments )
			)
		);

		foreach ( $attachments as $attachment ) {
			$attachment_id = $attachment->ID;
			$current_mime  = $attachment->post_mime_type;

			// Get the full file path.
			$file_path = get_attached_file( $attachment_id );

			// Get just the base name for display purposes.
			$file_name = basename( $file_path );

			if ( ! $file_path || ! file_exists( $file_path ) ) {
				WP_CLI::warning(
					sprintf(
						/* translators: %d: Attachment ID. */
						__( 'Attachment ID %d: file does not exist on disk. Skipping...', 'fix-mime-types' ),
						$attachment_id
					)
				);
				continue;
			}

			// Attempt to get the real MIME type. (FileInfo extension recommended).
			$finfo     = finfo_open( FILEINFO_MIME_TYPE );
			$real_mime = finfo_file( $finfo, $file_path );
			finfo_close( $finfo );

			// Log the current details.
			WP_CLI::log(
				sprintf(
					/* translators: 1: Attachment ID, 2: file name, 3: current MIME, 4: detected MIME. */
					__( 'Attachment ID %1$d, File: %2$s, Current MIME: %3$s, Detected MIME: %4$s', 'fix-mime-types' ),
					$attachment_id,
					$file_name,
					$current_mime,
					$real_mime
				)
			);

			// Compare and update if needed.
			if ( $real_mime && $current_mime !== $real_mime ) {
				wp_update_post(
					array(
						'ID'             => $attachment_id,
						'post_mime_type' => $real_mime,
					)
				);

				WP_CLI::log(
					sprintf(
						/* translators: 1: old MIME type, 2: new MIME type. */
						__( 'MIME updated from "%1$s" to "%2$s".', 'fix-mime-types' ),
						$current_mime,
						$real_mime
					)
				);
			} else {
				WP_CLI::log( __( 'No changes needed.', 'fix-mime-types' ) );
			}
		}

		WP_CLI::success( __( 'Process complete. All MIME types have been verified/updated.', 'fix-mime-types' ) );
	}
}
