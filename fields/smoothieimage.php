<?php defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldSmoothieImage extends JFormField {

	protected $type = 'SmoothieImage';

	/**
	 * Method to attach a JForm object to the field.
	 *
	 * @param   SimpleXMLElement  $element  The SimpleXMLElement object representing the <field /> tag for the form field object.
	 * @param   mixed             $value    The form field value to validate.
	 * @param   string            $group    The field name group control value. This acts as as an array container for the field.
	 *                                      For example if the field has name="foo" and the group value is set to "bar" then the
	 *                                      full field name would end up being "bar[foo]".
	 *
	 * @return  boolean  True on success.
	 *
	 * @see     JFormField::setup()
	 * @since   3.2
	 */
	public function setup(SimpleXMLElement $element, $value, $group = null) {
		$result = parent::setup($element, $value, $group);

		var_dump($value);

//		if ($result == true)
//		{
//			$inputmode = (string) $this->element['inputmode'];
//			$dirname = (string) $this->element['dirname'];
//
//			$this->inputmode = '';
//			$inputmode = preg_replace('/\s+/', ' ', trim($inputmode));
//			$inputmode = explode(' ', $inputmode);
//
//			if (!empty($inputmode))
//			{
//				$defaultInputmode = in_array('default', $inputmode) ? JText::_("JLIB_FORM_INPUTMODE") . ' ' : '';
//
//				foreach (array_keys($inputmode, 'default') as $key)
//				{
//					unset($inputmode[$key]);
//				}
//
//				$this->inputmode = $defaultInputmode . implode(" ", $inputmode);
//			}
//
//			// Set the dirname.
//			$dirname = ((string) $dirname == 'dirname' || $dirname == 'true' || $dirname == '1');
//			$this->dirname = $dirname ? $this->getName($this->fieldname . '_dir') : false;
//
//			$this->maxLength = (int) $this->element['maxlength'];
//		}

		return $result;
	}

	public function getInput() {
		$html		= array();
//		$html[] = '<input type="text" id="' . $this->id . '" name="' . $this->name . '[xyz]" value="'	. htmlspecialchars($this->value, ENT_COMPAT, 'utf-8') . '" />';
		$html[] = '<input type="text" id="' . $this->id . '" name="' . $this->name . '[xyz]" value="'	. htmlspecialchars($this->value['xyz'], ENT_COMPAT, 'utf-8') . '" />';

		return implode(null, $html);
	}

	public function render() {
		return 'xyz';
	}
}
?>