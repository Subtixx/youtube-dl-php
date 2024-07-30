<?php

declare(strict_types=1);

namespace YoutubeDl\Entity;

class SponsorBlockChapter extends AbstractEntity
{
    public function getStartTime(): float
    {
        return $this->get('start_time');
    }

    public function getEndTime(): float
    {
        return $this->get('end_time');
    }

    public function getCategory(): string
    {
        return $this->get('category');
    }

    public function getTitle(): string
    {
        return $this->get('title');
    }

    public function getType(): string
    {
        return $this->get('type');
    }

    /**
     * @return list<non-empty-string>
     */
    public function getCategories(): array
    {
        return $this->get('_categories');
    }
}
