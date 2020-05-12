<?php

namespace App\JsonApi\Transformer;

use App\Entity\Event;
use App\Utility\URLParser;
use WoohooLabs\Yin\JsonApi\Schema\Link\DocumentLinks;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * Event Resource Transformer.
 */
class EventResourceTransformer extends AbstractResource {

  /**
   * {@inheritdoc}
   */
  public function getType($event): string {
    return 'events';
  }

  /**
   * {@inheritdoc}
   */
  public function getId($event): string {
    return (string) $event->getUUID();
  }

  /**
   * {@inheritdoc}
   */
  public function getMeta($event): array {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLinks($event): ?ResourceLinks {
    $url = new URLParser($this->request->getUri());
    $eventID = $event->getEventid();
    if (!empty($eventID) && !empty($url)) {
      $thisUri = str_replace($eventID, "", $url->getThisURI());
      return ResourceLinks::createWithBaseUri($thisUri)
        ->setSelf(new Link($eventID));
    }
    return null;
  }

  /**
   * {@inheritdoc}
   */
  public function getAttributes($event): array {
    return [
      'sequentialID' => function(Event $event) {
        return $event->getId();
      },
      'uuid' => function (Event $event) {
        return $event->getUUID();
      },
      'eventid' => function (Event $event) {
        return $event->getEventid();
      },
      'name' => function (Event $event) {
        return $event->getName();
      },
      'nameshort' => function (Event $event) {
        return $event->getNameshort();
      },
      'type' => function (Event $event) {
        return $event->getType();
      },
      'description' => function (Event $event) {
        return $event->getDescription();
      },
      'titlelogo' => function (Event $event) {
        return $event->getTitlelogo();
      },
      'file1' => function (Event $event) {
        return $event->getFile1();
      },
      'file2' => function (Event $event) {
        return $event->getFile2();
      },
      'file3' => function (Event $event) {
        return $event->getFile3();
      },
      'file4' => function (Event $event) {
        return $event->getFile4();
      },
      'doc1' => function (Event $event) {
        return $event->getDoc1();
      },
      'doc2' => function (Event $event) {
        return $event->getDoc2();
      },
      'doc3' => function (Event $event) {
        return $event->getDoc3();
      },
      'doc4' => function (Event $event) {
        return $event->getDoc4();
      },
      'moy' => function (Event $event) {
        return $event->getMoy();
      },
      'dom' => function (Event $event) {
        return $event->getDom();
      },
      'year' => function (Event $event) {
        return $event->getYear();
      },
      'eMoy' => function (Event $event) {
        return $event->getEMoy();
      },
      'eDom' => function (Event $event) {
        return $event->getEDom();
      },
      'eYear' => function (Event $event) {
        return $event->getEYear();
      },
      'etime' => function (Event $event) {
        return $event->getEtime();
      },
      'venue' => function (Event $event) {
        return $event->getVenue();
      },
      'speakers' => function (Event $event) {
        return $event->getSpeakers();
      },
      'hpshow' => function (Event $event) {
        return $event->getHpshow();
      },
      'mihpshow' => function (Event $event) {
        return $event->getMihpshow();
      },
      'blurb' => function (Event $event) {
        return $event->getBlurb();
      },
      'publish' => function (Event $event) {
        return $event->getPublish();
      },
      'regdeadmoy' => function (Event $event) {
        return $event->getRegdeadmoy();
      },
      'regdeaddom' => function (Event $event) {
        return $event->getRegdeaddom();
      },
      'regdeadyear' => function (Event $event) {
        return $event->getRegdeadyear();
      },
      'caldisplay' => function (Event $event) {
        return $event->getCaldisplay();
      },
      'picture' => function (Event $event) {
        return $event->getPicture();
      },
      'eventprice' => function (Event $event) {
        return $event->getEventprice();
      },
      'confirmationemail' => function (Event $event) {
        return $event->getConfirmationemail();
      },
      'confirmationweb' => function (Event $event) {
        return $event->getConfirmationweb();
      },
      'datecreated' => function (Event $event) {
        return ($event->getDatecreated()) ? $event->getDatecreated()
          ->format(DATE_ATOM) : NULL;
      },
      'datemodified' => function (Event $event) {
        return ($event->getDatemodified()) ? $event->getDatemodified()
          ->format(DATE_ATOM) : NULL;
      },
      'dateevent' => function (Event $event) {
        return ($event->getDateevent()) ? $event->getDateevent()
          ->format(DATE_ATOM) : NULL;
      },
      'splashpage' => function (Event $event) {
        return $event->getSplashpage();
      },
      'splashurl' => function (Event $event) {
        return $event->getSplashurl();
      },
      'dateasnum' => function (Event $event) {
        return $event->getDateasnum();
      },
      'campaignname' => function (Event $event) {
        return $event->getCampaignname();
      },
      'campaignid' => function (Event $event) {
        return $event->getCampaignid();
      },
      'campaigntype' => function (Event $event) {
        return $event->getCampaigntype();
      },
      'campaignowner' => function (Event $event) {
        return $event->getCampaignowner();
      },
      'campaigntypepublic' => function (Event $event) {
        return $event->getCampaigntypepublic();
      },
      'cventid' => function (Event $event) {
        return $event->getCventid();
      },
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultIncludedRelationships($event): array {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getRelationships($event): array {
    return [
    ];
  }

}
