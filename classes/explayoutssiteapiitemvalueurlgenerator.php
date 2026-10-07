<?php
class expLayoutsSiteApiItemValueUrlGenerator
{
    public function generate( $value )
    {
        if ( $value instanceof expSiteApiLocation )
            return $value->urlAlias();

        if ( $value instanceof expSiteApiContent )
        {
            $node = $value->mainLocationId() > 0 ? eZContentObjectTreeNode::fetch( (int)$value->mainLocationId() ) : null;
            return $node instanceof eZContentObjectTreeNode ? '/' . $node->attribute( 'url_alias' ) : '';
        }

        return '';
    }
}
