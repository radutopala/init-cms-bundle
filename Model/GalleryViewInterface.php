<?php

namespace Networking\InitCmsBundle\Model;


/**
 * Networking\GalleryBundle\Model\GalleryViewInterface
 *
 */
interface GalleryViewInterface
{
    /**
     * @param  \Networking\InitCmsBundle\Entity\Gallery $mediaGallery
     * @return $this
     */
    public function setMediaGallery($mediaGallery);

    /**
     * @return \Networking\InitCmsBundle\Entity\Gallery
     */
    public function getMediaGallery();

    /**
     * Set createdAt
     *
     * @return $this
     */
    public function setCreatedAt();

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Set updatedAt
     *
     * @param  \DateTime $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @param $galleryType
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setGalleryType($galleryType);

    /**
     * @return string
     */
    public function getGalleryType();


    /**
     * @param array $params
     * @return array
     */
    public function getTemplateOptions($params = array());

    /**
     * @return array
     */
    public function getAdminContent();

    /**
     * @return bool
     */
    public function hasMedia();

    /**
     * @return array
     */
    public function getMediaItems();

    /**
     * @return string
     */
    public function getContentTypeName();
}
