<?php
/**
 * CodeIgniter Skeleton
 *
 * A ready-to-use CodeIgniter skeleton  with tons of new features
 * and a whole new concept of hooks (actions and filters) as well
 * as a ready-to-use and application-free theme and plugins system.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2020, Kader Bouyakoub <bkader[at]mail[dot]com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package 	CodeIgniter
 * @author 		Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright	Copyright (c) 2020, Kader Bouyakoub <bkader[at]mail[dot]com>
 * @license 	https://opensource.org/licenses/MIT	MIT License
 * @link 		https://goo.gl/wGXHO9
 * @since 		2.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Modules Module - Install Module
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Modules\Views
 * @author 		Kader Bouyakoub <bkader[at]mail[dot]com>
 * @link 		https://goo.gl/wGXHO9
 * @copyright 	Copyright (c) 2020, Kader Bouyakoub (https://goo.gl/wGXHO9)
 * @since 		2.0.0
 * @version 	2.0.0
 */
?>
<div class="row<?php if ( ! form_error('modulezip')): ?> collapse<?php endif; ?> justify-content-center mb-3" id="module-install">
	<div class="col-sm-8 col-md-6 text-center">
		<p><?php _e('CSK_MODULES_UPLOAD_TIP'); ?></p><br>
		<div class="card">
			<div class="card-body text-center">
				<?php
				// Form opening tag.
				echo form_open_multipart(
					KB_ADMIN.'/modules/upload',
					'class="form-inline'.(form_error('modulezip') ? ' has-error' : '').'" id="module-upload"'
				),
				// Form security nonce.
				form_nonce('upload-module'),

				// Form file.
				form_upload('modulezip', null, 'id="modulezip"'),

				// Form error.
				form_error('modulezip', '<div class="help-block">', '</div>'),

				// Location selection.
				form_dropdown('location', array(
					'-1' => __('CSK_MODULES_LOCATION_SELECT'),
					'0'  => __('CSK_MODULES_LOCATION_APPLICATION'),
					'1'  => __('CSK_MODULES_LOCATION_PUBLIC'),
				), '-1', 'class="form-control form-control-sm ml-2"'),

				// Form submit button.
				form_submit('module-install', __('CSK_MODULES_INSTALL'), array(
					'class' => 'btn btn-primary btn-sm ml-2'
				));

				// Form closing tag.
				form_close();
				?>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3" role="navigation">
	<p class="navbar-brand"><span class="badge badge-white text-red">0</span></p>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#modules-filter" aria-controls="modules-filter" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>

	<div class="collapse navbar-collapse" id="modules-filter">
		<ul class="navbar-nav mr-auto">
		<?php
		// Featured.
		echo html_tag('li', array(
			'class' => 'nav-item'
		), html_tag('a', array(
			'href' => 'javascript:void(0)',
			'class' => 'nav-link',
		), __('CSK_MODULES_FILTER_FEATURED'))),

		// Recommended
		html_tag('li', array(
			'class' => 'nav-item'
		), html_tag('a', array(
			'href' => 'javascript:void(0)',
			'class' => 'nav-link',
		), __('CSK_MODULES_FILTER_RECOMMENDED'))),

		// Popular.
		html_tag('li', array(
			'class' => 'nav-item'
		), html_tag('a', array(
			'href' => 'javascript:void(0)',
			'class' => 'nav-link',
		), __('CSK_MODULES_FILTER_POPULAR'))),

		// New.
		html_tag('li', array(
			'class' => 'nav-item'
		), html_tag('a', array(
			'href' => 'javascript:void(0)',
			'class' => 'nav-link',
		), __('CSK_MODULES_FILTER_NEW')));
		?>
		</ul>
		<form class="form-inline my-2 my-lg-0" role="search" method="get" action="javascript:void(0)">
			<div class="form-group mr-2 mb-0">
				<select name="type" id="type" class="form-control form-control-sm">
					<option value="name" selected="selected"><?php _e('CSK_MODULES_NAME'); ?></option>
					<option value="tags"><?php _e('CSK_MODULES_TAGS'); ?></option>
					<option value="author"><?php _e('CSK_MODULES_AUTHOR'); ?></option>
				</select>
			</div>
			<div class="form-group mb-0">
				<input type="text" class="form-control form-control-sm" id="search" name="search" placeholder="<?php _e('CSK_MODULES_SEARCH'); ?>">
			</div>
		</form>
	</div><!-- /.navbar-collapse -->
</nav>
<div class="alert alert-info"><strong>NOTE</strong>: This section will be developed soon.</div>
<div id="module-modal-container"></div>
