<?php


class EchoEditNotifyPageCreatePresentationModel extends EchoEventPresentationModel {
	public function getIconType() {
		return 'placeholder';
	}
	public function getPrimaryLink() {
		return array(
			'url' => $this->event->getExtraParam( 'title' )->getFullURL(),
			'label' => $this->msg( 'editnotify-page-edit-label' )->text(),
		);
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getExtraParam( 'title' ) );
		return $msg;
	}

}

