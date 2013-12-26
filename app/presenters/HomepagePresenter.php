<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

  protected function startup() {
    parent::startup();

    $this->template->timestamp = null;
  }

  public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

  public function handleOpenModal()
  {
    $this->template->timestamp = time();

    $this->invalidateControl('myModal');
    $this->template->openMyModal = TRUE;
  }
}
