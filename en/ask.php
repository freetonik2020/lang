<?php

return [
    'command' => implode("\n", [
        '🎁',
        ' Ask',
    ]),

    "is_us_citizen" => "Are you a US citizen or do you represent a US entity?",

    "success" => implode("\n", [
        "👍 I successfully asked giver.",
        "Please wait to see the incoming transaction.",
    ]),

    "fail" => [
        "recent" => implode("\n", [
            "⏳ You asked recently.",
            "Please wait for: :diff"
        ]),

        "score" => implode("\n", [
            "🚫 To get more TON Crystals you have to earn invitation score.",
            "Score earned: 🔢 :score",
            "TON Crystals received: 💎 :received",
            "",
            "To invite more people run /invite",
            "To get your invitation stats run /stats",
            "To get top inviters run /top",
        ]),

        "limit" => implode("\n", [
            "🚫 Sorry. You reached the airdrop limit for a single user.",
            "TON Crystals received: 💎 :received",
            "Current airdrop limit: 💎 :limit",
        ]),

        "empty" => implode("\n", [
            "🚫 Sorry. The giver is empty.",
            "If you'd like to support TON Crystals airdrop please consider donating to the Giver address."
        ]),

        "transferring" => "Transfer in progress...",

        "not_new" => "Sorry. Bot is curently on beta and airdrops tokens to new users only.",
    ],
];
