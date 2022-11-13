<?php

declare(strict_types=1);

namespace AndrewMarkhai\StathamPhraseGenerator;

class Generator
{
    private const PHRASES = [
        'Самое вкусное в куличках = это верхушка',
        'Кто обзывается, тот сам и называется',
        'Родители - это такие люди, которые гоняют авторитетных пацанов за хлебом',
        'Запомни, одна ошибка - и ты ошибся',
    ];

    public static function createPhrase(): string
    {
        return self::PHRASES[array_rand(self::PHRASES)];
    }
}