<div class="video-central-import-youtube">
	
	<div class="video-central-import-wizard-form">
	
		<form method="get" action="" id="video_central_load_feed_form">
		
			<?php wp_nonce_field('video-central-import', 'video_central_search_nonce'); ?>
			
			<input type="hidden" name="post_type" value="<?php echo $this->post_type;?>" />
			<input type="hidden" name="page" value="video_central_import" />
			<input type="hidden" name="video_central_source" value="youtube" />
			
			<table>
			
				<tr class="video_central_feed">
				
					<td valign="top">
						<label for="video_central_feed"><?php _e('Feed type', 'video_central');?> :</label>
						<span class="description"><?php _e('Select the type of feed to load.', 'video_central');?></span>
					</td>
					
					<td>
						<select name="video_central_feed" id="video_central_feed">
							<option value="user" title="<?php _e('YouTube ID', 'video_central');?>" selected="selected"><?php _e('User feed', 'video_central');?></option>
							<option value="playlist" title="<?php _e('YouTube playlist ID', 'video_central');?>"><?php _e('Playlist feed', 'video_central');?></option>
							<option value="query" title="<?php _e('Search query', 'video_central');?>" ><?php _e('Search query feed', 'video_central');?></option>
						</select>
					</td>
					
				</tr>
				
				<tr class="video_central_results">
					<td valign="top">
						<label for="video_central_results"><?php _e('Number of videos to retrieve', 'video_central');?> :</label>
						<span class="description"><?php _e('Enter any number of results you want to retrieve. Results will be paginated. Youtube allows a maximum of 1000 per request.', 'video_central');?></span>	
					</td>
					<td>
						<input type="text" name="video_central_results" id="video_central_results" value="50" size="2" />
					</td>
				</tr>
				
				<tr class="video_central_duration">
					<td valign="top"><label for="video_central_duration"><?php _e('Video duration', 'video_central');?> :</label></td>
					<td>
						<select name="video_central_duration" id="video_central_duration">
							<option value=""><?php _e('Any', 'video_central');?></option>
							<option value="short"><?php _e('Short (under 4min.)', 'video_central');?></option>
							<option value="medium"><?php _e('Medium (between 4 and 20min.)', 'video_central');?></option>
							<option value="long"><?php _e('Long (over 20min.)', 'video_central');?></option>
						</select>		
					</td>
				</tr>
				
				<tr class="video_central_query">
					<td valign="top">
						<label for="video_central_query"><?php _e('Search by', 'video_central');?>:</label>
						<span class="description"><?php _e('Enter playlist ID, user ID or search query to use.', 'video_central');?></span>
					</td>
					<td>
						<input type="text" name="video_central_query" id="video_central_query" value="" />
					</td>
				</tr>
				
				<tr class="video_central_order">
					<td valign="top"><label for="video_central_order"><?php _e('Order by', 'video_central');?> :</label></td>
					<td>
						<select name="video_central_order" id="video_central_order">
							<option value="published"><?php _e('Date of publishing', 'video_central');?></option>
							<option value="viewCount"><?php _e('Number of views', 'video_central');?></option>
							
							<option value="position"><?php _e('Position in playlist', 'video_central');?></option>
							<option value="commentCount"><?php _e('Number of comments', 'video_central');?></option>
							<option value="duration"><?php _e('Duration (longest to shortest)', 'video_central');?></option>
							<option value="reversedPosition"><?php _e('Reversed position in playlist', 'video_central');?></option>
							<option value="title"><?php _e('Video title', 'video_central');?></option>
							
							<option value="relevance" disabled="disabled"><?php _e('Search relevance', 'video_central');?></option>
							<option value="rating" disabled="disabled"><?php _e('Rating', 'video_central');?></option>					
						</select>
					</td>
				</tr>
	
				<tr>
					<td valign="top"><label for=""></label></td>
					<td></td>
				</tr>
	
			</table>

			<?php submit_button( __('Load video feed', 'video_central'), 'ajax-submit-params button-primary');?>
		
		</form>
	
	</div>
	
</div>