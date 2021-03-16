# orphanfilm-repotted

__see:__
[nyu-dss/repotting-template](https://github.com/nyu-dss/repotting-template/)

__site name:__
A World Community of Old Trees

__"old pot" url:__
[nyu.edu/projects/orphanfilm](https://www.nyu.edu/orphanfilm)
[nyu.edu/projects/orphans](https://www.nyu.edu/orphans)

__"new pot" url:__
[orphanfilm.hosting.nyu.edu](https://orphanfilm.hosting.nyu.edu/)

__date repotted:__
02.11.2021

__notes:__
the site has lots of audio/visual files, which significantly slows down the httrack crawl. since we had a zip file of the site's contents from the old server, we excluded a/v files from the crawl:

`$ httrack --verbose --clean https://www.nyu.edu/orphanfilm/ -*.mp3 -*.mp4 -*.mov -*.MOV -*.mpg -O docs`

next, locate the file path of the the a/v files in the (unzipped) directory. on a mac, the command looks something like:

`$ find . -type f \( -iname \*.mp3 -o -iname \*.mp4 -o -iname \*.mov -o -iname \*.MOV -o -iname \*.mpg \)`

then, use this list of file paths to manually copy over the a/v files into the corresponding location in docs.

note: a/v files are not included in this repo.
