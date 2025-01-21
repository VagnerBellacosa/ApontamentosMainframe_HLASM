
/**
 *
 * @package     theme_eguru
 * @copyright   2015 LMSACE Dev Team,lmsace.com
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
(function($){setInterval(function(){if($(".atto_stash_button").length==0||$("#user_edit").length>0){$(".atto_generico_button_iconone").remove();$(".atto_html_button").remove()}},1000);var img=$("#header").find('.avatar').find('img[src$="/u/f2"]');var src=img.attr('src');img.attr('src',src+'_white')})(jQuery)