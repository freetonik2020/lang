<?php

return [
    'command' => implode("\n", [
        'ℹ️',
        ' Stats info',
    ]),

    'message' => implode("\n", [
        "ℹ️ Statistics info.",
        "",
        "/stats and /top show number of referrals",
        ":total (:lvl_1 / :lvl_2 / :lvl_3)",
        "",
        ":lvl_1 - number of people invited by you",
        ":lvl_2 - number of people invited by those who were invited by you",
        ":lvl_3 - number of people invited by those who were invited by those who were invited by you",
        ":total - sum of three levels",
        "",
        "Score = 0.38 * :lvl_1 + 0.15 * :lvl_2 + 0.05 * :lvl_3",
    ]),
];
