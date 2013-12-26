<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

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
