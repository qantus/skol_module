<?php

namespace Modules\Skol\Forms;

use Mindy\Base\Mindy;
use Mindy\Form\Fields\TinymceField;
use Mindy\Orm\Model;
use Modules\Pages\Forms\PagesForm;
use Modules\Pages\PagesModule;

class PageForm extends PagesForm
{
    public function getFieldsets()
    {
        $enableComments = Mindy::app()->getModule('Pages')->enableComments;
        $fieldsets = [
            PagesModule::t('Main information') => [
                'name', 'url', 'content_short', 'content',
                'parent', 'is_index', 'is_published', 'published_at', 'file'
            ],
            PagesModule::t('Display settings') => [
                'view', 'view_children', 'sorting'
            ]
        ];
        return $enableComments ? array_merge($fieldsets, [
            PagesModule::t('Comments settings') => [
                'enable_comments', 'enable_comments_form'
            ],
        ]) : $fieldsets;
    }

    public function getFields()
    {
        return array_merge(parent::getFields(), [
            'content' => [
                'class' => TinymceField::className(),
                'label' => 'Контент'
            ],
        ]);
    }
}
