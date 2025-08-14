<?php
declare(strict_types=1);

namespace BirdCode\BcSimpleproject\Domain\Model;

/**
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The domain model of a tx_bcsimpleproject_domain_model_t3projectdetails
 */
class T3projectdetails extends AbstractEntity
{
    /**
     * @var bool
     */
    protected $hidden = false;
 
     /**
     * @var string
     */
    protected $rootpage = '';
 
    /**
     * @var string
     */
    protected $logotitle = '';

    /**
     * @var string
     */
    protected $footernote = '';
    
    /**
     * @var string
     */
    protected $footercopytext = '';
        
    /**
     * @var string
     */
    protected $email = '';
        
    /**
     * @var string
     */
    protected $emaillabel = '';
        
    /**
     * @var string
     */
    protected $phone = '';
        
    /**
     * @var string
     */
    protected $phonelabel = '';
        
    /**
     * @var string
     */
    protected $address = '';
        
    /**
     * @var string
     */
    protected $addresslong = '';
        
    /**
     * @var string
     */
    protected $linkedinurl = '';
        
    /**
     * @var string
     */
    protected $xurl = '';
        
    /**
     * @var string
     */
    protected $facebookurl = '';
        
    /**
     * @var string
     */
    protected $instagramurl = '';

    /**
     * @var string
     */
    protected $tiktokurl = '';

    /**
     * @var string
     */
    protected $discordurl = '';

    /**
     * @var string
     */
    protected $youtubeurl = '';
 
     /**
     * @var string
     */
    protected $githuburl = '';
 
    /**
     * @var string
     */
    protected $googlemapurl = '';
    
    /**
     * @var string
     */
    protected $googlemapembededurl = '';
 
    /**
     * @var string
     */
    protected $logodimensions = '';
    
    /**
     * @var string
     */
    protected $footerlogodimensions = '';
 
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $logo;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $footerlogo;
 
    public function __construct()
    {
        $this->logo = new ObjectStorage(); 
        $this->footerlogo = new ObjectStorage(); 
    }
    
    /**
     * Method setHidden
     *
     * @param $hidden $hidden
     *
     * @return void
     */
    public function setHidden($hidden): void
    {
        $this->hidden = $hidden;
    }
    
    /**
     * Method getHidden
     *
     * @return bool
     */
    public function getHidden(): bool
    {
        return $this->hidden;
    }
    
    /**
     * Method setRootpage
     *
     * @param $rootpage $rootpage
     *
     * @return void
     */
    public function setRootpage($rootpage): void
    {
        $this->rootpage = $rootpage;
    }
    
    /**
     * Method getRootpage
     *
     * @return string
     */
    public function getRootpage(): string
    {
        return $this->rootpage;
    }
      
    /**
     * Method setLogotitle
     *
     * @param string $logotitle
     *
     * @return void
     */
    public function setLogotitle(string $logotitle): void
    {
        $this->logotitle = $logotitle;
    }
    
    /**
     * Method getLogotitle
     *
     * @return string
     */
    public function getLogotitle(): string
    {
        return $this->logotitle;
    }
     
    /**
     * Method setFooternote
     *
     * @param string $footernote
     *
     * @return void
     */
    public function setFooternote(string $footernote): void
    {
        $this->footernote = $footernote;
    }
    
    /**
     * Method getFooternote
     *
     * @return string
     */
    public function getFooternote(): string
    {
        return $this->footernote;
    }
     
    /**
     * Method setFootercopytext
     *
     * @param string $footercopytext
     *
     * @return void
     */
    public function setFootercopytext(string $footercopytext): void
    {
        $this->footercopytext = $footercopytext;
    }
    
    /**
     * Method getFootercopytext
     *
     * @return string
     */
    public function getFootercopytext(): string
    {
        return $this->footercopytext;
    }
     
    /**
     * Method setEmail
     *
     * @param string $email
     *
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
    /**
     * Method getEmail
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
     
    /**
     * Method setEmaillabel
     *
     * @param string $emaillabel
     *
     * @return void
     */
    public function setEmaillabel(string $emaillabel): void
    {
        $this->emaillabel = $emaillabel;
    }
    
    /**
     * Method getEmaillabel
     *
     * @return string
     */
    public function getEmaillabel(): string
    {
        return $this->emaillabel;
    }
   
    /**
     * Method setPhone
     *
     * @param string $phone
     *
     * @return void
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
    
    /**
     * Method getPhone
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
     
    /**
     * Method setPhonelabel
     *
     * @param string $phonelabel
     *
     * @return void
     */
    public function setPhonelabel(string $phonelabel): void
    {
        $this->phonelabel = $phonelabel;
    }
    
    /**
     * Method getPhonelabel
     *
     * @return string
     */
    public function getPhonelabel(): string
    {
        return $this->phonelabel;
    }
          
    /**
     * Method setAddress
     *
     * @param string $address
     *
     * @return void
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    
    /**
     * Method getAddress
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
      
    /**
     * Method setAddresslong
     *
     * @param string $addresslong
     *
     * @return void
     */
    public function setAddresslong(string $addresslong): void
    {
        $this->addresslong = $addresslong;
    }
    
    /**
     * Method getAddresslong
     *
     * @return string
     */
    public function getAddresslong(): string
    {
        return $this->addresslong;
    }
     
    /**
     * Method setLinkedinurl
     *
     * @param string $linkedinurl
     *
     * @return void
     */
    public function setLinkedinurl(string $linkedinurl): void
    {
        $this->linkedinurl = $linkedinurl;
    }
    
    /**
     * Method getLinkedinurl
     *
     * @return string
     */
    public function getLinkedinurl(): string
    {
        return $this->linkedinurl;
    }
     
    /**
     * Method setXurl
     *
     * @param string $xurl
     *
     * @return void
     */
    public function setXurl(string $xurl): void
    {
        $this->xurl = $xurl;
    }
    
    /**
     * Method getXurl
     *
     * @return string
     */
    public function getXurl(): string
    {
        return $this->xurl;
    }
     
    /**
     * Method setFacebookurl
     *
     * @param string $facebookurl
     *
     * @return void
     */
    public function setFacebookurl(string $facebookurl): void
    {
        $this->facebookurl = $facebookurl;
    }
    
    /**
     * Method getFacebookurl
     *
     * @return string
     */
    public function getFacebookurl(): string
    {
        return $this->facebookurl;
    }
     
    /**
     * Method setInstagramurl
     *
     * @param string $instagramurl
     *
     * @return void
     */
    public function setInstagramurl(string $instagramurl): void
    {
        $this->instagramurl = $instagramurl;
    }
    
    /**
     * Method getInstagramurl
     *
     * @return string
     */
    public function getInstagramurl(): string
    {
        return $this->instagramurl;
    }
    
    /**
     * Method setTiktokurl
     *
     * @param string $tiktokurl
     *
     * @return void
     */
    public function setTiktokurl(string $tiktokurl): void
    {
        $this->tiktokurl = $tiktokurl;
    }
    
    /**
     * Method getTiktokurl
     *
     * @return string
     */
    public function getTiktokurl(): string
    {
        return $this->tiktokurl;
    }
     
    /**
     * Method setDiscordurl
     *
     * @param string $discordurl
     *
     * @return void
     */
    public function setDiscordurl(string $discordurl): void
    {
        $this->discordurl = $discordurl;
    }
    
    /**
     * Method getDiscordurl
     *
     * @return string
     */
    public function getDiscordurl(): string
    {
        return $this->discordurl;
    }
    
    /**
     * Method setYoutubeurl
     *
     * @param string $youtubeurl
     *
     * @return void
     */
    public function setYoutubeurl(string $youtubeurl): void
    {
        $this->youtubeurl = $youtubeurl;
    }
    
    /**
     * Method getYoutubeurl
     *
     * @return string
     */
    public function getYoutubeurl(): string
    {
        return $this->youtubeurl;
    }
     
    /**
     * Method setGithuburl
     *
     * @param string $githuburl
     *
     * @return void
     */
    public function setGithuburl(string $githuburl): void
    {
        $this->githuburl = $githuburl;
    }
    
    /**
     * Method getGithuburl
     *
     * @return string
     */
    public function getGithuburl(): string
    {
        return $this->githuburl;
    }
 
    /**
     * Method setLogodimensions
     *
     * @param string $logodimensions
     *
     * @return void
     */
    public function setLogodimensions(string $logodimensions): void
    {
        $this->logodimensions = $logodimensions;
    }

    /**
     * Method getLogodimensions
     *
     * @return string
     */
    public function getLogodimensions(): string
    {
        return $this->logodimensions;
    }

    /**
     * Method getLogoX
     *
     * @return array
     */
    public function getLogoX(): array
    {
        return json_decode($this->logodimensions, true) ?: [];
    }
 
	/**
	 * Method addLogo
	 *
	 * @param FileReference $logo
	 *
	 * @return void
	 */
	public function addLogo(FileReference $logo): void
    {
        $this->logo->attach($logo);
    }
    
    /**
     * Method removeLogo
     *
     * @param FileReference $logoToRemove
     *
     * @return void
     */
    public function removeLogo(FileReference $logoToRemove): void
    {
        $this->logo->detach($logoToRemove);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    public function getLogo(): ?ObjectStorage
    {
        return $this->logo;
    }
    
    /**
     * Method getFirstLogo
     *
     * @return FileReference
     */
    public function getFirstLogo(): ?FileReference
    {
        $logos = $this->getLogo();
        if ($logos) {
            foreach ($logos as $logo) {
                return $logo;
            }
        }

        return null;
    }

    /**
     * @param ObjectStorage<FileReference> $logo
     */
    public function setLogo(ObjectStorage $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * Method setFooterlogodimensions
     *
     * @param string $footerlogodimensions
     *
     * @return void
     */
    public function setFooterlogodimensions(string $footerlogodimensions): void
    {
        $this->footerlogodimensions = $footerlogodimensions;
    }

    /**
     * Method getFooterlogodimensions
     *
     * @return string
     */
    public function getFooterlogodimensions(): string
    {
        return $this->footerlogodimensions;
    }
   
    /**
     * Method getFooterlogoX
     *
     * @return array
     */
    public function getFooterlogoX(): array
    {
        return json_decode($this->footerlogodimensions, true) ?: [];
    }
  
    /**
     * Method addFooterlogo
     *
     * @param FileReference $footerLogo
     *
     * @return void
     */
    public function addFooterlogo(FileReference $footerLogo): void
    {
        $this->footerlogo->attach($footerLogo);
    }
    
    /**
     * Method removeFooterlogo
     *
     * @param FileReference $footerLogoToRemove
     *
     * @return void
     */
    public function removeFooterlogo(FileReference $footerLogoToRemove): void
    {
        $this->footerlogo->detach($footerLogoToRemove);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    public function getFooterlogo(): ?ObjectStorage
    {
        return $this->footerlogo;
    }
    
    /**
     * Method getFirstFooterlogo
     *
     * @return FileReference
     */
    public function getFirstFooterlogo(): ?FileReference
    {
        $footerLogos = $this->getFooterlogo();
        if ($footerLogos) {
            foreach ($footerLogos as $footerLogo) {
                return $footerLogo;
            }
        }

        return null;
    }

    /**
     * @param ObjectStorage<FileReference> $footerLogo
     */
    public function setFooterlogo(ObjectStorage $footerLogo): void
    {
        $this->footerlogo = $footerLogo;
    }
   
    /**
     * Method setGooglemapurl
     *
     * @param string $googlemapurl
     *
     * @return void
     */
    public function setGooglemapurl(string $googlemapurl): void
    {
        $this->googlemapurl = $googlemapurl;
    }
    
    /**
     * Method getGooglemapurl
     *
     * @return string
     */
    public function getGooglemapurl(): string
    {
        return $this->googlemapurl;
    }
    
    /**
     * Method setGooglemapembededurl
     *
     * @param string $googlemapembededurl
     *
     * @return void
     */
    public function setGooglemapembededurl(string $googlemapembededurl): void
    {
        $this->googlemapembededurl = $googlemapembededurl;
    }
    
    /**
     * Method getGooglemapembededurl
     *
     * @return string
     */
    public function getGooglemapembededurl(): string
    {
        return $this->googlemapembededurl;
    }
}
