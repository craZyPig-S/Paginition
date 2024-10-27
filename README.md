# Pagination Data Array ($pagnition_data)
  * The $pagnition_data array contains the primary configuration for pagination, including links and display properties:

  * url: (string)
      The base URL for pagination links.
      Example: 'http://localhost/library-web/index.php'

  * total_rows: (integer)
      The total number of items across all pages.
      Example: 60

  * page_items: (integer)
      Number of items to display on each page.
      Example: 10

  * f_page: (integer)
      The initial page number to start the pagination from.
      Example: 1

  * first_link_text: (string)
      The text displayed for the "First" page link.
      Example: '&lsaquo; First'

  * next_link_text: (string)
      The text displayed for the "Next" page link.
      Example: '&gt; Next'

  * previous_link_text: (string)
      The text displayed for the "Previous" page link.
      Example: '&lt; Previous'

  * last_link_text: (string)
      The text displayed for the "Last" page link.
      Example: 'Last &rsaquo;'

  * full_tag_name: (string)
      HTML tag that wraps around the entire pagination block.
      Example: 'ul'

  * first_tag_name: (string)
      HTML tag for the "First" link.
      Example: 'li'

  * last_tag_name: (string)
      HTML tag for the "Last" link (if empty, the last link will have no specific tag).
      Example: ''

  * cur_tag_names: (array)
      HTML tags applied to the current page link.
      Example: array('strong')

  * next_tag_name: (array)
      HTML tags applied to the "Next" link.
      Example: array('strong')

  * prev_tag_name: (array)
      HTML tags applied to the "Previous" link.
      Example: array('strong')

# Pagination Class Array ($pagnition_data_class)
The $pagnition_data_class array contains CSS class names for styling pagination links.

  * full_tag_class: (array)
      CSS class applied to the entire pagination block.
      Example: array('pagination')

  * first_tag_class: (array)
      CSS class for the "First" link.
      Example: array('')

  * last_tag_class: (array)
      CSS class for the "Last" link.
      Example: array('')

  * cur_tag_class: (array)
      CSS class for the current page link.
      Example: array('')

  * next_tag_class: (array)
      CSS class for the "Next" link.
      Example: array('')

  * prev_tag_class: (array)
      CSS class for the "Previous" link.
      Example: array('')

  * attribute_class: (array)
      CSS class applied to all pagination links, such as buttons.
      Example: array('btn')

Integrate these arrays in your pagination function to generate customizable navigation for pages of content. Modify the parameters as needed to fit your URL structure and design preferences. The array values control text, tags, and styles, allowing flexibility in the appearance and behavior of the pagination.

to see example try index.php file
