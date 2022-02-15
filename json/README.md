# JSON Database

## Looplegangers

The database structure is a simple array of needed items to display in the front end. Each airdrop will be placed in their own separate file (not tracked in the repo).

Each airdrop has two main categories: "valley" and "unique". The schema is below.

```json
{
    "valley": [
        {
            "name": "Chuck Norris",
            "id_text": "X01/1001",
            "id": "1001",
            "file": "norris.png"
        },
        {
            "name": "Bill Clinton",
            "id_text": "X05/1005",
            "id": "1005",
            "file": "clinton.png"
        }
    ],
    "unique": [
        {
            "name": "Skeletor",
            "id": "110",
            "file": "skeletor.png"
        },
        {
            "name": "Dr. Gero",
            "id": "143",
            "file": "gero.png"
        }
    ]
}
```

## Origin Stories

The database structure holds as many lines of text as you want and some basics on the Loophead. Scehma is below.

```json
[
    {
        "id": "267",
        "name": "Mehgg",
        "lore": [
            "Mehgg woke up feeling refreshed and glared out of the window of her personal living capsule. It was a beautiful, sunny day outside and she could see birds playing with each other, jumping from limb to limb.",
            "She opened the window and a cool breeze flew in, joined by birds whistling melodies for anyone who would listen. \"Eggs, toast, and some crispy bacon with a nice joint sounds perfect.\" Her tummy began grumbling.",
            "Mehgg opens the fridge and is caught off-guard when reaching for the eggs. It's too light, there are none left. Disappointed, she continued searching for the bacon, but only found a package of empty dreams.",
            "She pops two pieces of toast into the toaster oven and sighs knowing she won't get to treat her taste buds; at least she can still treat her brain. Mehgg grabs her box of rolling stuff and sits by the window.",
            "She begins pinching ganja into the paper and it's clear there is barely enough for even one joint, but she can make it work. Suddenly, a strong breeze comes through the window as she drops in the last pinch.",
            "The paper acted like a sail, and catapulted cannabis into the air and circulated it through the room. Grasping desperately at the air to catch even a small morsel, she tripped over her bed and fell to the ground.",
            "When she sat up, the smell of burning toast permiated the air. Mehgg had never experienced such bullshit before."
        ]
    }
]
```
