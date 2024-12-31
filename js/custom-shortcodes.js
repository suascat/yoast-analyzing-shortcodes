
const getShortcodes = (shortcodes) => {

  shortcodes.push("gallery", "su_custom_gallery", "my_shortcode");
  return shortcodes;
};


wp.hooks.addFilter(
  "yoast.analysis.shortcodes",  
  "yoast-analyzing-shortcodes.addShortcodes",
  getShortcodes               
);
