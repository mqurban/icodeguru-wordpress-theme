# iCodeGURU WordPress Theme 
##### A theme built during practice sessions at iCodeguru

### WORDPRESS FUNCTIONS AND HOOKS USEFUL FOR DEVELOPMENT PURPOSE

1. `wp_head()` - Outputs HTML head elements.
2. `wp_footer()` - Outputs footer scripts and data.
3. `wp_enqueue_script()` - Adds a script to the queue.
4. `wp_enqueue_style()` - Adds a stylesheet to the queue.
5. `get_header()` - Loads the header template.
6. `get_footer()` - Loads the footer template.
7. `get_sidebar()` - Loads the sidebar template.
8. `the_post()` - Sets up the post data.
9. `the_content()` - Displays the post content.
10. `the_title()` - Displays the post title.
11. `the_permalink()` - Retrieves the post permalink.
12. `get_template_part()` - Loads a template part.
13. `the_excerpt()` - Displays the post excerpt.
14. `get_header_image()` - Retrieves the custom header image URL.
15. `get_custom_header()` - Retrieves the custom header details.
16. `add_theme_support()` - Adds theme support for various features.
17. `register_nav_menu()` - Registers a navigation menu.
18. `wp_nav_menu()` - Displays a navigation menu.
19. `dynamic_sidebar()` - Outputs dynamic sidebar content.
20. `register_sidebar()` - Registers a sidebar.
21. `get_option()` - Retrieves an option value.
22. `update_option()` - Updates an option value.
23. `delete_option()` - Deletes an option value.
24. `get_theme_mod()` - Retrieves a theme modification value.
25. `set_theme_mod()` - Sets a theme modification value.
26. `register_post_type()` - Registers a custom post type.
27. `register_taxonomy()` - Registers a custom taxonomy.
28. `add_image_size()` - Registers a custom image size.
29. `has_post_thumbnail()` - Checks if the post has a thumbnail.
30. `the_post_thumbnail()` - Displays the post thumbnail.
31. `wp_get_attachment_image()` - Retrieves an attachment image.
32. `the_category()` - Displays the post categories.
33. `the_tags()` - Displays the post tags.
34. `get_the_author_meta()` - Retrieves the author meta data.
35. `the_author()` - Displays the post author.
36. `get_search_form()` - Displays the search form.
37. `comments_template()` - Loads the comments template.
38. `comment_form()` - Displays the comment form.
39. `wp_list_comments()` - Lists the comments.
40. `wp_insert_post()` - Inserts a new post into the database.
41. `wp_update_post()` - Updates an existing post.
42. `wp_delete_post()` - Deletes a post.
43. `wp_insert_comment()` - Inserts a new comment into the database.
44. `wp_update_comment()` - Updates an existing comment.
45. `wp_delete_comment()` - Deletes a comment.
46. `wp_create_user()` - Creates a new user.
47. `wp_update_user()` - Updates an existing user.
48. `wp_delete_user()` - Deletes a user.
49. `wp_login_form()` - Displays the login form.
50. `wp_logout()` - Logs the current user out.
51. `wp_loginout()` - Displays login/logout link.
52. `wp_get_current_user()` - Retrieves the current user object.
53. `wp_nonce_field()` - Generates a nonce field.
54. `wp_verify_nonce()` - Verifies a nonce.
55. `wp_create_nonce()` - Creates a nonce.
56. `is_user_logged_in()` - Checks if a user is logged in.
57. `get_the_ID()` - Retrieves the current post ID.
58. `is_page()` - Checks if a page is being displayed.
59. `is_single()` - Checks if a single post is being displayed.
60. `is_home()` - Checks if the homepage is being displayed.
61. `is_front_page()` - Checks if the front page is being displayed.
62. `is_archive()` - Checks if an archive page is being displayed.
63. `is_category()` - Checks if a category archive is being displayed.
64. `is_tag()` - Checks if a tag archive is being displayed.
65. `is_author()` - Checks if an author archive is being displayed.
66. `is_search()` - Checks if a search result page is being displayed.
67. `is_404()` - Checks if a 404 error page is being displayed.
68. `is_admin()` - Checks if the current page is in the admin area.
69. `current_user_can()` - Checks if the current user has a specific capability.
70. `get_queried_object()` - Retrieves the currently queried object.
71. `get_query_var()` - Retrieves the value of a query variable.
72. `wp_redirect()` - Redirects the page.
73. `add_action()` - Adds an action hook.
74. `do_action()` - Executes an action hook.
75. `remove_action()` - Removes an action hook.
76. `add_filter()` - Adds a filter hook.
77. `apply_filters()` - Applies a filter hook.
78. `remove_filter()` - Removes a filter hook.
79. `register_activation_hook()` - Registers a plugin activation hook.
80. `register_deactivation_hook()` - Registers a plugin deactivation hook.
81. `register_uninstall_hook()` - Registers a plugin uninstallation hook.
82. `wp_register_script()` - Registers a script.
83. `wp_deregister_script()` - Deregisters a script.
84. `wp_register_style()` - Registers a style.
85. `wp_deregister_style()` - Deregisters a style.
86. `add_shortcode()` - Adds a shortcode.
87. `remove_shortcode()` - Removes a shortcode.
88. `get_stylesheet_directory_uri()` - Retrieves the stylesheet directory URI.
89. `get_template_directory_uri()` - Retrieves the template directory URI.
90. `get_stylesheet_directory()` - Retrieves the stylesheet directory path.
91. `get_template_directory()` - Retrieves the template directory path.
92. `get_theme_file_uri()` - Retrieves a file URI within the theme directory.
93. `get_theme_file_path()` - Retrieves a file path within the theme directory.
94. `wp_kses()` - Filters content to permit only allowable HTML elements.
95. `esc_html()` - Escapes HTML for safe output.
96. `esc_attr()` - Escapes attribute values for safe output.
97. `esc_url()` - Escapes URL for safe output.
98. `wp_kses_post()` - Filters content to permit only allowable HTML elements for posts.
99. `sanitize_text_field()` - Sanitizes text field input.
100. `wp_kses_allowed_html()` - Retrieves the allowed HTML elements and attributes.

These functions, hooks, and elements are essential for developing WordPress themes and ensuring proper functionality, security, and customization.