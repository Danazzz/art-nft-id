<?php
/**
 * @author : Jegtheme
 */
namespace EPIC\Module\Hero;

Class Hero_7_View extends HeroViewAbstract
{

    public function render_block($post, $index)
    {
        $index = $index + 1;

        if($post) {
            $primary_category = $this->get_primary_category($post->ID);
            $image = $this->get_thumbnail($post->ID, 'epic-featured-750');

            $output =
                "<article " . epic_post_class("jeg_post jeg_hero_item_{$index}", $post->ID) . " style=\"padding: 0 0 {$this->margin}px {$this->margin}px;\">
                    <div class=\"jeg_block_container\">
                        " . epic_edit_post( $post->ID ) . "
                        <span class=\"jeg_postformat_icon\"></span>
                        <div class=\"jeg_thumb\">
                            <a href=\"" . get_the_permalink($post) . "\" >{$image}</a>
                        </div>
                        <div class=\"jeg_postblock_content\">
                            <div class=\"jeg_post_category\">
                                {$primary_category}
                            </div>
                            <div class=\"jeg_post_info\">
                                <h2 class=\"jeg_post_title\">
                                    <a href=\"" . get_the_permalink($post) . "\">" . get_the_title($post) . "</a>
                                </h2>
                                {$this->post_meta_2($post)}
                            </div>
                        </div>
                    </div>
                </article>";

            return $output;
        } else {
            $output =
                "<article class=\"jeg_post jeg_hero_item_{$index} jeg_hero_empty\" style=\"padding: 0 0 {$this->margin}px {$this->margin}px;\">
                    <div class=\"jeg_block_container\"></div>
                </article>";

            return $output;
        }
    }

    public function render_element($result)
    {
        $output = '';
        for($i = 0; $i <= ( $this->get_number_post() - 1 ); $i++){
            $item = isset($result[$i]) ? $result[$i] : '';
            $output .=$this->render_block($item, $i);
        }

        return $output;
    }
}
