<?php
/**
 * TwigGetUrl - A small plugin to forward Query String data to Twig.
 *
 * NotePaper v1.5.3
 * http://development.sjmcdougall.com/pico-themes/NotePaper
 * http://github.com/smcdougall/NotePaper
 *
 * @author  Simon McDougall
 * @link    http://development.sjmcdougall.com/pico-themes/NotePaper
 * @license https://opensource.org/licenses/GPL-3.0
 * @version 1.0
 */
final class TwigGetUrl extends AbstractPicoPlugin
{
  protected $enabled = true;

  protected $dependsOn = array();

  public function onPageRendering(Twig_Environment &$twig, array &$twigVariables, &$templateName)
  {

      $twigVariables['TwigGetUrl'] = $_GET;
      $twigVariables['TwigGetUrlEnabled'] = true;
  }
}
