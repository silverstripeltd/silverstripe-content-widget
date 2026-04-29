<?php

namespace SilverStripe\ContentWidget;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Widgets\Model\Widget;

/**
 * Content Widget
 */
class ContentWidget extends Widget
{
    private static array $db = [
        "HTML" => "HTMLText",
    ];

    private static string $title = "Content";

    private static string $cmsTitle = "Content";

    private static string $description = "Custom rich content widget.";

    private static string $table_name = 'ContentWidget';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->push(TextField::create("Title"));
        $fields->push(HTMLEditorField::create("HTML", "Content"));

        return $fields;
    }
}
