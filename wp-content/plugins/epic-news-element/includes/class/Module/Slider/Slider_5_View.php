<?php
/**
 * @author : Jegtheme
 */
namespace EPIC\Module\Slider;

Class Slider_5_View extends SliderViewAbstract
{
    public function content($results)
    {
        $content = '';
        foreach($results as $key => $post)
        {
            $primary_category = $this->get_primary_category($post->ID);

            if($this->manager->get_current_width() > 8){
                $image = get_the_post_thumbnail_url($post->ID, 'epic-1140x570');
            } else {
                $image = get_the_post_thumbnail_url($post->ID, 'epic-750x375');
            }

            $content .=
                "<div " . epic_post_class("jeg_slide_item", $post->ID) . " style=\"background-image: url({$image})\">
                    " . epic_edit_post( $post->ID ) . "
                    <div class=\"jeg_slide_caption\">
                        <div class=\"jeg_caption_container\">
                            <div class=\"jeg_post_category\">
                                {$primary_category}
                            </div>
                            <h2 class=\"jeg_post_title\">
                                <a href=\"" . get_the_permalink($post) . "\">" . get_the_title($post) . "</a>
                            </h2>
                            {$this->render_meta($post)}
                        </div>
                    </div>
                </div>";
        }

        return $content;
    }

    public function render_element($result, $attr)
    {
        if(!empty($result))
        {
            $content            = $this->content($result);
            $autoplay_delay     = isset( $attr['autoplay_delay']['size'] ) ? $attr['autoplay_delay']['size'] : $attr['autoplay_delay'];
	        $additional_class   = isset($attr['overlay_option']) && $attr['overlay_option'] === 'none' ? 'no-overlay' : '';
//	        $style              = $this->generate_style($attr);

            $output =
                "<div {$this->element_id($attr)} class=\"jeg_slider_wrapper jeg_slider_type_5_wrapper {$this->unique_id} {$this->get_vc_class_name()} {$additional_class} {$attr['el_class']}\">
                    <div class='jeg_slider_placeholder'>
						<div class='thumbnail-wrapper'>
							<div class='thumbnail-inner'><div class='thumbnail-container'></div></div>
						</div>
					</div>
                    <div class=\"jeg_slider_type_5 jeg_slider epic-owl-carousel\" data-autoplay=\"{$attr['enable_autoplay']}\" data-delay=\"{$autoplay_delay}\">
                        {$content}
                    </div>
                </div>";

            return $output;
        } else {
            return $this->empty_content();
        }
    }
}
