<?php

namespace App\Dto;

use App\Dto\ViewData;
use Symfony\Component\Validator\Constraints as Assert;


class RequestDto
{

    /**
     * @Assert\NotBlank
     */
    private $apiKey;

    /**
     * @Assert\NotBlank
     * @Assert\Choice({"Insert", "Update", "Delete","Read","CustomerRegister","CustomerLogout","Search","GetAll","requestOTP","validateOTP"}, message="Provide valid command.Allowed operations - Insert,Update,Delete,GetAll,Search,requestOTP,validateOTP,CustomerRegister")
     */
    private $command;

    /**
     * @Assert\Choice({"en", "ar"},message="Choose a valid language en,ar")
     */
    private $lang;

    /**
     * @Assert\NotBlank
     */
    private $deviceId;

    /**
     * @var ViewData
     *
     * @Assert\NotBlank
     */
    private $viewData;

    /**
     * Get apiKey.
     *
     * @return apiKey.
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    /**
     * Set apiKey.
     *
     * @param apiKey the value to set.
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get command.
     *
     * @return command.
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * Set command.
     *
     * @param command the value to set.
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }

    /**
     * Get lang.
     *
     * @return lang.
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * Set lang.
     *
     * @param lang the value to set.
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * Get deviceId.
     *
     * @return deviceId.
     */
    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    /**
     * Set deviceId.
     *
     * @param deviceId the value to set.
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Get viewData.
     *
     * @return viewData.
     */
    public function getViewData(): ViewData
    {
        return $this->viewData;
    }

    /**
     * Set viewData.
     *
     * @param viewData the value to set.
     */
    public function setViewData(ViewData $viewData)
    {
        $this->viewData = $viewData;
    }

    public function populateFromArray(array $data)
    {
        if (isset($data['apiKey']))
            $this->setApiKey($data['apiKey']);

        if (isset($data['command']))
            $this->setCommand($data['command']);

        if (isset($data['lang']))
            $this->setLang($data['lang']);

        if (isset($data['deviceId']))
            $this->setDeviceId($data['deviceId']);

        $viewData = new ViewData();
        if (isset($data['viewData'])) {
            $viewData->populateFromArray($data['viewData']);
        }

        $this->setViewData($viewData);
    }
}
