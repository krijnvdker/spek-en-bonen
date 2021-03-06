<?php
/**
 * Underscore.js template
 *
 * @package fusion-builder
 * @since 2.0
 */

?>
<script type="text/template" id="fusion-builder-modules-template">
	<div class="fusion-builder-modal-top-container">
		<div class="fusion-builder-modal-search">
			<label for="fusion-modal-search" class="fusiona-search"><span>Search</span></label>
			<input type="text" id="fusion-modal-search" class="fusion-elements-filter" placeholder="{{ fusionBuilderText.search_elements }}" />
		</div>
		<ul class="fusion-tabs-menu">
			<li class=""><a href="#default-elements">{{ fusionBuilderText.builder_elements }}</a></li>
			<li class=""><a href="#custom-elements">{{ fusionBuilderText.library_elements }}</a></li>
			<li class=""><a href="#inner-columns">{{ fusionBuilderText.inner_columns }}</a></li>
		</ul>
	</div>

	<div class="fusion-builder-main-settings fusion-builder-main-settings-full has-group-options">
		<div class="fusion-builder-all-elements-container">
			<div class="fusion-tabs">
				<div id="default-elements" class="fusion-tab-content">
					<ul class="fusion-builder-all-modules">
						<# _.each( generator_elements, function(module) { #>
							<# var additionalClass = ( 'undefined' !== typeof module.generator_only ) ? ' fusion-builder-element-generator' : ''; #>
							<li class="{{ module.label }} fusion-builder-element{{ additionalClass }}">
								<h4 class="fusion_module_title">
									<# if ( 'undefined' !== typeof fusionAllElements[module.label].icon ) { #>
										<div class="fusion-module-icon {{ fusionAllElements[module.label].icon }}"></div>
									<# } #>
									{{ module.title }}
								</h4>
								<# if ( 'undefined' !== typeof module.generator_only ) { #>
									<span class="fusion-tooltip">{{ fusionBuilderText.generator_elements_tooltip }}</span>
								<# } #>
								<span class="fusion_module_label">{{ module.label }}</span>
							</li>
						<# } ); #>

						<# for ( var i = 0; i < 16; i++ ) { #>
							<li class="spacer fusion-builder-element"></li>
						<# } #>
					</ul>
				</div>

				<div id="inner-columns" class="fusion-tab-content">
					<?php echo fusion_builder_inner_column_layouts(); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</div>

				<div id="custom-elements" class="fusion-tab-content"></div>
			</div>
		</div>
	</div>
</script>
