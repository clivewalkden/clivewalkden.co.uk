---
extends: _layouts.post
id: 20220130
meta_title: RollerCoin Introduction to virtual Bitcoin mining
meta_description: An introduction to the RollerCoin site and how you can use it to mine your own coins
title: RollerCoin Intro
short_intro: An introduction to the RollerCoin site and how you can use it to mine your own coins
intro: An introduction to the RollerCoin site and how you can use it to mine your own coins
published: 2022-01-30 20:45:00
hide: false
category: bitcoin
hero:
author: Clive Walkden
---

@section('content')
    <h3>What is it?</h3>
    <p>{!! $page->image("/assets/images/blog/articles/rollercoin-games.jpg", null, null, ['class' => 'md:float-right md:w-2/5 md:pl-8', 'title' => 'RollerCoin Games', 'alt' => 'RollerCoin Games']) !!}
    <a href="https://rollercoin.com/?r=kwlqf6gu" target="_blank"
       rel="external"
       title="RollerCoin">RollerCoin</a> is an online, virtual bitcoin mining game where you compete against your friends to mine bitcoins. It takes the concept of bitcoin mining, but instead of the sophisticated Blockchain and processing algorithms,</p>
    <p><a href="https://rollercoin.com/?r=kwlqf6gu" target="_blank" rel="external"
       title="RollerCoin">RollerCoin</a> lets you test your skills, complete missions, undertake tasks, and play games to build your mining empire.</p>
    <h3>How do I play?</h3>
    <p>Simply <a href="https://rollercoin.com/?r=kwlqf6gu" target="_blank" rel="external" title="RollerCoin">create your
            account</a>, customise your avatar and start playing games to increase your mining power.</p>
    <h3>What is RLT?</h3>
    <p>RLT is RollerToken - the main <a href="https://rollercoin.com/?r=kwlqf6gu" target="_blank" rel="external"
                                        title="RollerCoin">RollerCoin</a> in-game currency, which is used to purchase
        miners and other equipment. This is a token you can mine through <a href="https://rollercoin.com/?r=kwlqf6gu"
                                                                            target="_blank" rel="external"
                                                                            title="RollerCoin">RollerCoin</a> but isn't
        listed on any exchanges. You can convert other currencies to RLT to use in-game. 1 RLT is roughly equivalent to
        1 USD.</p>
    <h3>How much can I earn?</h3>
    <p>That depends on several things, the number of games you play in a day, the number of miners you have in your
        racks, and the power of the network.</p>
    <p>{!! $page->image("/assets/images/blog/articles/rollercoin-power-split.jpg", null, null, ['class' => 'md:float-right md:w-2/5 md:pl-8', 'title' => 'RollerCoin power split', 'alt' => 'RollerCoin power split']) !!}
    If you play 50 games a day, every day, you would have approximately 250TH/s of mining power to use in the platform. You can split the mining power across multiple coins (RLT RollerToken, BTC Bitcoin, ETH Ethereum, BNB BinanceCoin, MATIC Polygon, DOGE DogeCoin) at the same time in 1% increments.</p>
    <p>Having all 250 TH/s mining BTC would give you approximately 0.000000004 BTC every 10 minutes 1 second.</p>
    <p>Having all 250 TH/s mining RLT would give you approximately 0.0004 RLT every 10 minutes 1 second.</p>
    <p>Mining RLT allows you to accumulate the token used to buy miners in the game and increase your mining output
        further. Mining RLT doesn't give you anything that you can transfer out of the system (currently).</p>
    <h3>How much do Miners cost?</h3>
    <p>You can purchase miners from 2.6 RLT to 110 RLT with some limited edition ones being made available during
        special events. To use a miner you need to have a rack installed in your room and the miner has to be out to be
        generating THs.</p>
    <p>In the latest version, miners can now be upgraded with loot drops combining matching miners. For example, if you
        have 2 RollerArc S1s, 14 Common Fans, 5 Common Wires, and 2 Common Hashboards. You can combine the miner and
        upgrade from 150 GH/s to 450 GH/s and only take up 1 space on your rack.</p>
    <p>Also in the loot drops you can get power-ups, bonus RLT, and even free miners. Since starting 8 weeks ago I've
        had a couple of miner loot drops, several RLT bonus drops of 0.01 or 0.05 RLT, and plenty of bonus power
        drops.</p>
    <div class="flex mb-8">
        <div class="flex-1">
            {!! $page->image("/assets/images/blog/articles/rollercoin-2xpower-hold-loot-drop.jpg", 245, 230, ['title' => 'RollerCoin 2x Power Hold Loot Drop', 'alt' => 'RollerCoin 2x Power Hold Loot Drop', 'resize' => true]) !!}
        </div>
        <div class="flex-1">
            {!! $page->image("/assets/images/blog/articles/rollercoin-200ghs-loot-drop.jpg", 245, 230, ['title' => 'RollerCoin 200 GH/s Loot Drop', 'alt' => 'RollerCoin 200 GH/s Loot Drop', 'resize' => true]) !!}
        </div>
        <div class="flex-1">
            {!! $page->image("/assets/images/blog/articles/rollercoin-rlt-loot-drop.jpg", 245, 230, ['title' => 'RollerCoin RLT Loot Drop', 'alt' => 'RollerCoin RLT Loot Drop', 'resize' => true]) !!}
        </div>
    </div>

    <h3>Overall</h3>
    <p>I highly recommend this site, it's fun and keeps me coming back to it day after day. I'll be exploring the site
        further in future articles so keep coming back for more information.</p>
    <p class="p-4 text-gray-900 font-semibold bg-yellow-200 rounded-md">
        Signing up with <a href="https://rollercoin.com/?r=kwlqf6gu" target="_blank" rel="external" title="RollerCoin"
                           class="bg-yellow-300 underline">this link</a> gets you 1000 Sataoshi to start your <a
                href="https://rollercoin.com/?r=kwlqf6gu" target="_blank" rel="external"
                title="RollerCoin">RollerCoin</a> adventure! This link is an affiliate link, I do earn a percentage if
        you spend money or play on the site.
    </p>
@endsection