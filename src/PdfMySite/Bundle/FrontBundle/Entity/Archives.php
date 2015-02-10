<?php

namespace PdfMySite\Bundle\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archives
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PdfMySite\Bundle\FrontBundle\Repository\ArchivesRepository")
 */
class Archives {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=512)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="ipaddress", type="string", length=255)
     */
    private $ipaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text", nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, unique = true)
     */
    private $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive", type="boolean", nullable=false)
     */
    private $archive = true;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255)
     */
    private $file;

    /**
     * @var datetime $created
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Archives
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set ipaddress
     *
     * @param string $ipaddress
     * @return Archives
     */
    public function setIpaddress($ipaddress) {
        $this->ipaddress = $ipaddress;

        return $this;
    }

    /**
     * Get ipaddress
     *
     * @return string 
     */
    public function getIpaddress() {
        return $this->ipaddress;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Archives
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Archives
     */
    public function setKeywords($keywords) {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords() {
        return $this->keywords;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Archives
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Archives
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Archives
     */
    public function setActive($active) {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Set archive
     *
     * @param boolean $archive
     * @return Archives
     */
    public function setArchive($archive) {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return boolean 
     */
    public function getArchive() {
        return $this->archive;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Archives
     */
    public function setFile($file) {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile() {
        return $this->file;
    }

    /**
     * Set created
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     * @return datetime
     */
    public function getCreated() {
        return $this->created;
    }

}
