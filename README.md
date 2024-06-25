# Scroll Progress Bar Plugin for WordPress

The ["Scroll Progress Bar"](https://github.com/Swino4ka/divi/blob/main/src/php/main/ScrollProgressBar.php) is a WordPress plugin that adds a visually appealing scroll-to-top button with a dynamic progress bar that fills as the user scrolls down the page.

## Features

- **Scroll-to-Top Button:** A clickable button that smoothly scrolls the user back to the top of the page.
- **Progress Bar:** Displays the user's progress through the page as they scroll.
- **Customizable Styles:** Easy to modify CSS for custom styling.

## Installation

1. Download the plugin files.
2. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
3. Activate the plugin through the 'Plugins' screen in WordPress.

## Usage

Once activated, the plugin automatically adds a scroll-to-top button with a progress bar at the bottom right corner of the page. The styles and functionality are pre-defined and will run without any additional configuration.

## Development

The plugin includes the following main functions:

- `wdfc_enqueue_styles`: Enqueues necessary CSS styles.
- `wdfc_add_circle`: Outputs the HTML for the scroll-to-top button.
- `wdfc_add_inline_style`: Adds inline CSS and JavaScript directly into the page head for immediate effect.

### Adding More Styles

You can add more styles by modifying the `wdfc_add_inline_style` function. It includes CSS for the button and its hover states, and JavaScript for the scroll percentage calculation and button functionality.

## Contributing

Contributions are welcome from the community. Before submitting a pull request, please ensure your changes are well tested. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the GPL-2.0 license - see the LICENSE file for details.

## Author

- **Swino4ka**

Feel free to reach out to me with any questions or suggestions at [My Email](mailto:example@example.com).
