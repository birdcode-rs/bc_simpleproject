<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BirdCode\BcSimpleproject\Utility;
  
class SimpleHelperUtility
{   
    public function generateFavicons(array $favicons): ?string
    {
        $html = []; 

        foreach ($favicons as $item) {
            if (empty($item['rel']) || empty($item['href'])) {
                continue; 
            }
 
            $attrs = [
                'rel'   => $item['rel'],
                'href'  => $item['href'],
            ];

            if (!empty($item['type'])) {
                $attrs['type'] = $item['type'];
            }
            if (!empty($item['sizes'])) {
                $attrs['sizes'] = $item['sizes'];
            }
 
            $attrString = '';
            foreach ($attrs as $k => $v) {
                $attrString .= sprintf(' %s="%s"', htmlspecialchars($k, ENT_QUOTES), htmlspecialchars($v, ENT_QUOTES));
            }

            $html[] = "<link$attrString>";
        }

        return implode("\n", $html);
    }    
}