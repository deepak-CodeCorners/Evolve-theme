<?php 

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'Home Banner Section',
        'title'             => __('Home Banner Section'),
        'description'       => __(''),
        'render_template'   => 'includes/blocks/home/home-banner-section.php',
        'category'          => 'home-blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'home-banner-section', 'quote' ),
    ));

    acf_register_block_type(array(
        'name'              => 'Home Grid Section',
        'title'             => __('Home Grid Section'),
        'description'       => __(''),
        'render_template'   => 'includes/blocks/home/home-grid-section.php',
        'category'          => 'home-blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'home-grid-section', 'quote' ),
    ));

    acf_register_block_type(array(
        'name'              =>'Home Discount Section',
        'title'             =>__('Home Discount Section'),
        'description'       =>__(''),
        'render_template'   => 'includes/blocks/home/home-discount-section.php',
        'category'          => 'home-blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array('home-discount-section', 'quote'),
    ));

    acf_register_block_type(array(
        'name'              => 'home Request Section',
        'title'             =>__('Home Request Section'),
        'descrition'        =>__(''),
        'render_template'   =>'includes/blocks/home/home-request-section.php',
        'category'          =>'home-blocks',
        'icon'              =>'admin-comments',
        'keywords'          =>array('home-request-section','quote'),
        
    ));

    acf_register_block_type(array(
        'name'              =>'Home People Section',
        'title'             =>__('Home People Section'),
        'description'       =>__(''),
        'render_template'   =>'includes/blocks/home/home-people-section.php',
        'category'          =>'home-blocks',
        'icon'              =>'admin-comments',
        'keywords'          =>array('home-people-section','quote'),
    ));