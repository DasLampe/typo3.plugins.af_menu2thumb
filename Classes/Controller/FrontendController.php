<?php
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Andre Flemming <info(at)nixmuss-design.de>, NixMuss Design
 *
 *  All rights reserved
 *
 *  This script is part of the raipad.de project. The raipad.de project is
 *  closed software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace DasLampe\AfMenu2thumb\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class FrontendController extends ActionController
{
    /**
     * @var TYPO3\CMS\Frontend\Page\PageRepository
     * @inject
     */
    protected $pageRepository;

    /**
     * @var TYPO3\CMS\Core\Resource\FileRepository
     * @inject
     */
    protected $fileRepository;

    public function showAction() {

        $subpages = $this->pageRepository->getMenu($GLOBALS['TSFE']->id, '*', null, 'AND hidden = 0');

        $menu = array();
        foreach($subpages as $subpage) {
            $menu[] = array(
                'title'         => $subpage['title'],
                'uid'           => $subpage['uid'],
                'teaserImage'   => $this->getTeaserImage($this->fileRepository->findByRelation('pages', 'media', $subpage['uid'])),
            );
        }

        $this->view->assign('menu', $menu);
    }

    /**
     * Get first image
     * @param array $fileReferences
     * @return string
     */
    protected function getTeaserImage($fileReferences) {
        foreach($fileReferences as $fileReference) {
            if(in_array($fileReference->getMimeType(), array('image/gif', 'image/jpeg','image/png'))) {
                return $fileReference->getOriginalFile();
            }
        }
        return '';
    }
}