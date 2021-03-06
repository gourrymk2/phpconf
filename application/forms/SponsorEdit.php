<?php

class Phpconf_Form_SponsorEdit extends Zend_Form
{

    public function init()
    {
        $this->setName("sponsor-edit")
                ->setMethod('post')
                ->addElement('hidden', 'id', array(
                    'filters' => array('Digits'),
                    'required' => true,
                ))
                ->addElement('hidden', 'conferenceId', array(
                    'filters' => array('Digits'),
                    'required' => true,
                ))
                ->addElement('text', 'name', array(
                    'filters' => array('StripTags'),
                    'validators' => array(
                        array('StringLength', false, array(1, 200)),
                    ),
                    'required' => true,
                    'label' => '姓名',
                ))
                ->addElement('text', 'supply', array(
                    'validators' => array(
                        array('StringLength', false, array(1, 200)),
                    ),
                    'required' => true,
                    'label' => '提供',
                ))
                ->addElement('submit', 'save', array(
                    'required' => false,
                    'ignore' => true,
                    'label' => '儲存',
                ));
    }

    /**
     *
     * @param int $id
     * @return Phpconf_Form_SponsorEdit
     */
    public function setId($id)
    {
        $element = $this->getElement('id');
        $element->setValue($id);
        return $this;
    }

    /**
     *
     * @param int $conferenceId
     * @return Phpconf_Form_SponsorEdit
     */
    public function setConferenceId($conferenceId)
    {
        $element = $this->getElement('conferenceId');
        $element->setValue($conferenceId);
        return $this;
    }
}

