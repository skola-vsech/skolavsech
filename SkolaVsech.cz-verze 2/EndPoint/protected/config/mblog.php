<?php

return array(
    // module components
    'components' => array(
        'MBlogComponent' => array('enable' => true, 'class' => 'MBlogComponent'),
        'CommentsComponent' => array('enable' => true, 'class' => 'CommentsComponent'),
    ),
    // url manager
    'urlManager' => array(
        'rules' => array(
            'posts/view/id/([0-9]+)/(.*-?)' => 'posts/view/id/{$0}/name/{$1}',
            'posts/view/id/([0-9]+)' => 'posts/view/id/{$0}',
            'posts/view/([0-9]+)/(.*-?)' => 'posts/view/id/{$0}/name/{$1}',
            'posts/view/([0-9]+)' => 'posts/view/id/{$0}',
            'posts/([0-9]+)/(.*-?)' => 'posts/view/id/{$0}/name/{$1}',
            'posts/([0-9]+)' => 'posts/view/id/{$0}',
            'posts/category/([0-9]+)/(.*-?)' => 'posts/category/id/{$0}/name/{$1}',
            'posts/category/([0-9]+)' => 'posts/category/id/{$0}',
            'posts/resources/([0-9]+)' => 'posts/resources/rId/{$0}',
            'posts/archive/([0-9-]+)' => 'posts/archive/id/{$0}',
            'posts/admin/([0-9]+)/(.*-?)' => 'posts/admin/id/{$0}/name/{$1}',
            'posts/admin/([0-9]+)' => 'posts/admin/id/{$0}',
            'posts/author/([0-9]+)/(.*-?)' => 'posts/author/id/{$0}/name/{$1}',
            'posts/author/([0-9]+)' => 'posts/author/id/{$0}',
            'pages/view/([0-9]+)/(.*-?)' => 'pages/view/id/{$0}/name/{$1}',
            'pages/view/([0-9]+)' => 'pages/view/id/{$0}',
            'pages/([0-9]+)/(.*-?)' => 'pages/view/id/{$0}/name/{$1}',
            'pages/([0-9]+)' => 'pages/view/id/{$0}',
            'posts/tags/(.*)' => 'posts/tags/tName/{$0}',
            'authors/profile/(.*)' => 'authors/profile/id/{$0}',
        ),
    ),

	// Default Backend url (optional, if defined - will be used as application default settings)
	'backendDefaultUrl' => 'posts/manage',    
	
	// Default settings (optional, if defined - will be used as application default settings)
	//'defaultErrorController' => 'Error',
    'defaultController' => 'Posts',
    'defaultAction' => 'viewall',
);
