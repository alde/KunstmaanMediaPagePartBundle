<?php

namespace Kunstmaan\MediaPagePartBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\AbstractType;
use Doctrine\ORM\EntityRepository;

/**
 * DownloadPagePartAdminType
 */
class DownloadPagePartAdminType extends AbstractType
{

    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting form the
     * top most type. Type extensions can further modify the form.
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('media', 'media', array('pattern' => 'KunstmaanMediaBundle_chooser_filechooser', 'label' => 'mediapagepart.download.choosefile'));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'kunstmaan_mediabundle_downloadpageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'Kunstmaan\MediaPagePartBundle\Entity\DownloadPagePart',
        ));
    }

}
