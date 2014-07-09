<?php

return array(
	'prep_value'            => true,
	'auto_id'               => true,
	'auto_id_prefix'        => '', // Set nothing to avoid FuelPHP Bug: https://github.com/fuel/core/issues/839
	'form_method'           => 'post',
	'form_template'         => "\n{open}\n\n{fields}\n\n{close}\n",
	'fieldset_template'     => "\n\t{open}\n\n{fields}\n\n\t{close}\n",
	'div_template'     => "\n\t{open}\n\n{fields}\n\n\t{close}\n",
	'field_template'        => "\n\t\t<div class=\"control-group {error_class}\">\n\t\t\t<span class=\"control-label\">{label} {required}<span class=\"help-block\">{description}</span></span>\n\t\t\t<div class=\"controls\">\n\t\t\t\t{field}\n\t\t\t\t{error_msg}\n\t\t\t</div>\n\t\t</div>\n",
	'multi_field_template'  => "\n\t\t<div class=\"control-group {error_class}\">\n\t\t\t<span class=\"control-label\">{group_label}</span>{required}\n\t\t\t<div class=\"controls\">{fields}\n\t\t\t<div class=\"form-inline\">{field} {label}</div>\n{fields}</div>\t\t\t{error_msg}\n\t\t\t</div>\n",
	'error_template'        => '<span class="help-inline">{error_msg}</span>',
	'required_mark'         => '<span class="required">*</span>',
	'inline_errors'         => true,
	'error_class'           => 'error',
);
