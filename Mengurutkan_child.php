          wp_list_pages(array(
            'title_li' => NULL,  // Hide title
            'child_of' => $findChildrenOf,
            // Set urutan child, edit di Order di Edit Page 
            'sort_column' => 'menu_order' 
          ));