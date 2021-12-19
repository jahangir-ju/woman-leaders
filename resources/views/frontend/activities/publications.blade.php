

@extends('index')
@section('content')

publications.blade.php

Internet based social sites like Twitter, Facebook and so on are a noteworthy center 
point for clients to express their sentiments on the web. Sentiment analysis which is 
likewise called opinion mining, includes in structure a framework to gather and analyze 
conclusions about the item made in blog entries, remarks, or surveys. We analyzed 
some cricket player’s popularity by their fans tweet. Twitter is very popular for 
providing API’s to data miner which are exceptionally valuable for picking up users 
tweets for research. We used twitter's 'STREAMING API' for collect the tweets about 
13 different players of Bangladesh Cricket Team.
Twitter's Streaming API is a push of information as tweets occur in real-time. It is used 
for scrapping real time data. In our research, it is important to scrap real time data 
because of measuring popularity of a player in specific time. We wrote a python script 
that search for specific player’s name in twitter with the help of Streaming API key. 
When people wrote about those names of players, the API push that tweet in our script 
and then the data has been saved into the disk in different CSV files. We searched for 
thirteen different players name in Bengali language from 1st October 2018 till 31st 
December 2018. The script has been run during 3 months continuously in a 'Raspberry 
Pi' which was ran in a Debian system. We named this bot as a “TwitterPiCollector”. 
The tweets saved into the disk we have searched for, stored into 13 different CSV files. 
Only few numbers of people write tweets in Bengali language, so that we didn't get 
huge amount of data. We have now total 2952 tweets about 13 different players name. 
Figure 3.3.1 shows the architecture of TwitterPiCollector


@endsection
