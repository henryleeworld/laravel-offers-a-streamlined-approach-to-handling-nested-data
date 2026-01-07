<?php

namespace App\Http\Controllers;

use HiFolks\DataType\Block;

class CharactersController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charactersArr = [
            __('Hathaway Noa') => ['cast' => __('Kensho Ono'), 'mecha' => __('XI Gundam'), 'notes' => __('A young man whose father Bright fought alongside Amuro in the One Year War. As a boy, he survived the second Neo Zeon War (Char\'s Rebellion) launched by Char Aznable, and is now training on Earth as a botanical observer. However, Hathaway is actually Mafty Navue Erin, the leader of the anti-Earth Federation organization Mafty. He is preparing to attack a conference of high-ranking Federation officials in Adelaide, and will pilot the XI Gundam—a state-of-the-art mobile suit at the very heart of the operation. A mysterious young woman he meets on the shuttle Haunzen, Gigi Andalusia, and an EFF colonel commanding the Circe Unit, Kenneth Sleg, will become deeply entangled in Hathaway\'s destiny. Will Gigi be the light that guides him...?')],
            __('Gigi Andalucia') => ['cast' => __('Reina Ueda'), 'notes' => __('A beautiful young woman who fascinates all the men around her, and draws the envy of all the women. When Gigi meets Hathaway and Kenneth aboard the Haunzen, she displays amazing insight which verges on precognition, drawing both men\'s interest. After an air raid on Davao, she briefly takes refuge with Kenneth before departing for her original destination—a count\'s villa in New Hong Kong—to play her part. While preparing for her new life with Count Boundenwooden, Gigi realizes she feels an undeniable pull toward Hathaway and leaks the location of the Adelaide conference to Mafty. Her actions set Hathaway and Kenneth on a collision course. Like the enchantress Circe of legend, her allure seems to magically draw the fates of men together...')],
            __('Kenneth Sleg') => ['cast' => __('Junichi Suwabe'), 'notes' => __('An Earth Federation Forces Captain. A former mobile suit pilot, he saw combat during Char\'s Counterattack and later went on to develop new mobile suits. With Mafty\'s activities on the rise, he is tasked with executing a support operation for the Adelaide conference, a plan centered around a mobile suit of his own design. As part of these preparations, he is appointed the new commander of the Davao airbase in the South Pacific district. He renames his unit—the core of the force tasked with hunting down and destroying Mafty—the Circe Unit. Sensing a fateful connection to both Gigi and Hathaway, whom he met on the Haunzen, he actively leverages Gigi\'s uncanny insight and good fortune for his military advantage, all while suspecting that Hathaway may be none other than Mafty Navue Erin.')],
            __('Lane Aim') => ['cast' => __('Soma Saito'), 'mecha' => __('Penelope'), 'notes' => __('A test pilot of the new Gundam, the Penelope, who was assigned to the Davao air base before Kenneth took up his new post. His rank is Lieutenant Junior Grade. An elite officer entrusted with his own team at a young age, his lack of practical combat experience and insistence on a \'clean\' fight lead to his defeat in his first encounter with the Xi Gundam, an engagement he barely survives. Dissatisfied with Kenneth\'s willingness to use hostages, divination, and traps, Lane is determined to prove his own superiority through pure skill. He is also skeptical of Gigi. While he dismisses the adults who deify her as a prophet, calling them \'warped,\' he can\'t help but intuitively sense a ring of truth in her words and actions.')],
        ];
        $data = Block::make($charactersArr);
        $hathaway = $data->get(__('Hathaway Noa'));
        echo __('Hathaway Noa') . __('\'s notes: ') . $hathaway['notes'] . PHP_EOL;
    }
}
