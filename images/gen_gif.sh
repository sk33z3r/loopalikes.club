#!/usr/bin/env bash

# define roots
root=$PWD
ipfs_root="https://loopring.mypinata.cloud/ipfs/"

# define file paths
font="$root/ttp.ttf"
get_errors="$root/get_errors.log"
make_errors="$root/make_errors.log"
id_list="$root/.id_list"
shrink_errors="$root/shrink_errors.log"
delay_file="$root/.delay"

# define some global details
color="#2d2f4b"

if [ ! -f $delay_file ]; then
    echo 5 > $delay_file
    delay=5
else
    delay=$(cat $delay_file)
fi

# set size per drop
set=100

# Set to the highest released ID + 1
highest_id=3101

# define cid hashes for set folders
declare -A ipfs_hashes
ipfs_hashes[100]="QmaSLzmo1mNqZi5VeRCuL9yhNoKAwmfdWFeuhVFLFBCcYm"
ipfs_hashes[200]="QmcWQ91zTFfDAtNiVJnifrwgrSqWK8cLiuD68F7YSMAhYM"
ipfs_hashes[300]="QmW1GnZWUyhwxyKKYs1ZSesjsaZk7WCXANdzLpLAF1eWQj"
ipfs_hashes[400]="QmWknTZr7vYRumHd1iRs7Ynjoc9ApDQBJTrpKVYbvPWUea"
ipfs_hashes[500]="QmdXxJTiyPNi1NY2Q4QEj9pxcn31ugoWPvYnrPa1WWHnrw"
ipfs_hashes[600]="QmYnBgkwPmnMQeUmnH2mhPQWST1g5MTPsjE8rGDvfJQAvW"
ipfs_hashes[700]="QmPHyNZytFbbacsJ6TXpKyN8U4yjxS3nyfGWj7Tdtgz27L"
ipfs_hashes[800]="QmP9agQTkvigpLTrgvS78TyxaKzZPuDjFaXCAViFBz1Kzb"
ipfs_hashes[900]="QmdQ9PG8JWfB83b9BQ7v7AR5Ky1LsB9ubXrRuB8TEQJuLY"
ipfs_hashes[1000]="QmQrH67hcexQ2copfQzEc1LUoEvakrmC2UCpTqi7TnbYEF"
ipfs_hashes[1100]="QmQUNq35Tu86WdHhFJYbjBnDogQy7ZfBBr1MXaT45o6FXE"
ipfs_hashes[1200]="QmezPQ9UUtkhFFeLiW6UD2KLS4FKMXneG3S4zzeFhFWcQv"
ipfs_hashes[1300]="QmU29qN1fo4WeU2jsUNwRWs3UrPD4oYpkquWdnEzRhcitc"
ipfs_hashes[1400]="QmcqSvqEB6nzHYSEhM8G3PuzkzWx2qBzE9TfRPs5JJM2AA"
ipfs_hashes[1500]="QmVu8Kt6qqoeZ4kh9iydLR4A2xW1cdtNJ8akj2KYku5Jnd"
ipfs_hashes[1600]="QmXXLFtpBnPBnnGnVXTYA71HxjjHe1EDkfE7GTibiHXF1x"
ipfs_hashes[1700]="QmfLxCd4tXcHVke9oXRNWjiYHBeKdEN1MRVWVQ2tQAbLvZ"
ipfs_hashes[1800]="Qmf2wE7afYakgFXSxoWVMyJsm2yMLecLt1cHCAm79QMTgw"
ipfs_hashes[1900]="QmdzwxdJLYVaV6SRvqiHq7wAVPsyZv52c91goDDuhVJX5q"
ipfs_hashes[2000]="QmWXQ6rGWPxMtuHUdHCgsWw1tT7vkhvbzxJPc3kmH3BXKR"
ipfs_hashes[2100]="QmVHwaoSLSFYfj3XdN2P8K2zyQyXqvZBzMa4fzMx7BirHY"
ipfs_hashes[2200]="QmanSHegmejjhhaP4WzEtoLXjxUxjFnV5jaCqGV1WBiq2T"
ipfs_hashes[2300]="QmZW3hh3eV1rEPtUG83LVT3eyERuXzH8y3n5JXGYSx8CA7"
ipfs_hashes[2400]="QmPmNM1J8knzg9dNDQrsUbUeWmGbGgu7EAr9rRp5AoU5oF"
ipfs_hashes[2500]="QmdAFJjnrYARWkKswTxGbG1FkmzsHeNfrrdkeEzC1DEHN6"
ipfs_hashes[2600]="QmYfVM6KqXG1JLmhunrfTDP1NVNA1fMJkbRU4ePQ7utKak"
ipfs_hashes[2700]="QmbfQC2Bqw2y8FFh95F5xiuEGWm8TyqyzhgAQwufxkYcbC"
ipfs_hashes[2800]="QmPQdkw4mznJS1ApdDuSep6fk4FZoDSbRdzAZXXhiN2Q4u"
ipfs_hashes[2900]=""
ipfs_hashes[3000]=""

# download and resize all loopheads
get_all() {
    subset=100
    end_set=$((set+1000))
    while [ $set -lt $end_set ]; do
        if [ $set -eq 1000 ]; then
            num_map=("_index" 6 7 8 9 10 101 102 103 104 105 106 107 108 109 11 110 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 46 47 48 49 50 51 52 53 54 55 56 57 58 59 60 61 62 63 64 65 66 67 68 69 70 71 72 73 74 75 76 77 78 79 80 81 82 83 84 85 86 87 88 89 90 91 92 93 94 95)
        else
            num_map=("_index" 1 2 3 4 5 6 7 8 9 10 100 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 46 47 48 49 50 51 52 53 54 55 56 57 58 59 60 61 62 63 64 65 66 67 68 69 70 71 72 73 74 75 76 77 78 79 80 81 82 83 84 85 86 87 88 89 90 91 92 93 94 95 96 97 98 99)
        fi
        num=1
        echo "  Getting images from set $set..."
        while [ $num -lt 101 ]; do
            id=$((num+set))
            echo "    Getting and resizing images for Loophead #$id..."
            url_num=$(printf "%02d" ${num_map[$num]})
            mkdir -p $id/{original,vars}
            echo "      IPFS CID for ${set}: ${ipfs_hashes[$set]}"
            echo "      Subset: ${subset}"
            echo "      Downloading PNGs from IPFS..."
            orig="${id}/original"
            vars="${id}/vars"
            bg=0; while [ $bg -lt 5 ]; do
                b=0; while [ $b -lt 5 ]; do
                    loop_url="${ipfs_root}${ipfs_hashes[$set]}/loophead${url_num}_${subset}_${bg}_${b}.png"
                    png_file="${orig}/${bg}-${b}.png"
                    echo "        Fetching: ${loop_url}"
                    curl -s --connect-timeout 60 --max-time 300 $loop_url > $png_file &
                    ((b++))
                done
                ((bg++))
            done
            sleep $delay
            echo "    Resizing to 900x900..."
            bg=0; while [ $bg -lt 5 ]; do
                b=0; while [ $b -lt 5 ]; do
                png_file="${bg}-${b}.png"
                    convert $orig/$png_file -alpha remove -resize 900x900 $vars/$png_file
                    ((b++))
                done
                ((bg++))
            done
            echo "      Deleting originals for #$id..."
            rm -r $id/original
            ((num++))
        done
        set=$((set+100))
        subset=$((subset+100))
    done
}

# download and resize one loophead
get_one() {
    id=$1
    if [ $id -gt 1000 ] && [ $id -lt 1101 ]; then
        num_map=("_index" 6 7 8 9 10 101 102 103 104 105 106 107 108 109 11 110 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 46 47 48 49 50 51 52 53 54 55 56 57 58 59 60 61 62 63 64 65 66 67 68 69 70 71 72 73 74 75 76 77 78 79 80 81 82 83 84 85 86 87 88 89 90 91 92 93 94 95)
    else
        num_map=("_index" 1 2 3 4 5 6 7 8 9 10 100 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 46 47 48 49 50 51 52 53 54 55 56 57 58 59 60 61 62 63 64 65 66 67 68 69 70 71 72 73 74 75 76 77 78 79 80 81 82 83 84 85 86 87 88 89 90 91 92 93 94 95 96 97 98 99)
    fi
    echo "  Getting and resizing images for Loophead #$id..."
    num=$(echo ${id: -2} | sed 's/^0*//')
    if [ -z $num ]; then num=100; fi
    if [ $id -gt 1100 ]; then
        set=$((id-num))
        mult=$(echo ${set: 1})
        offset=$((mult*1000))
        subset=$((set-offset))
    else
        set=$((id-num))
        subset=$((id-num))
    fi
    url_num=$(printf "%02d" ${num_map[$num]})
    mkdir -p $id/{original,vars}
    echo "    IPFS CID for ${set}: ${ipfs_hashes[$set]}"
    echo "    Subset: ${subset}"
    echo "    Downloading PNGs from IPFS..."
    orig="${id}/original"
    vars="${id}/vars"
    bg=0; while [ $bg -lt 5 ]; do
        b=0; while [ $b -lt 5 ]; do
            loop_url="${ipfs_root}${ipfs_hashes[$set]}/loophead${url_num}_${subset}_${bg}_${b}.png"
            png_file="${orig}/${bg}-${b}.png"
            echo "        Fetching: ${loop_url}"
            curl -s --connect-timeout 60 --max-time 300 $loop_url > $png_file &
            ((b++))
        done
        ((bg++))
    done
    sleep $delay
    echo "    Resizing to 900x900..."
    bg=0; while [ $bg -lt 5 ]; do
        b=0; while [ $b -lt 5 ]; do
        png_file="${bg}-${b}.png"
            convert $orig/$png_file -alpha remove -resize 900x900 $vars/$png_file
            ((b++))
        done
        ((bg++))
    done
    echo "    Deleting originals for #$id..."
    rm -r $orig
}

# download and resize a list of loopheads
get_list() {
    for l in $(cat $id_list); do
        get_one $l
    done
}

# generate gifs for all loopheads
make_all() {
    while [ $set -lt $end_set ]; do
        num=1
        echo "  Making gifs from set $set..."
        while [ $num -lt 101 ]; do
            id=$((num+set))
            if [ $id -gt 999 ]; then
                text=(550 50 "LOOPHEAD #$id")
                rect=(525 0 900 75)
            else
                text=(575 50 "LOOPHEAD #$id")
                rect=(550 0 900 75)
            fi
            echo "    Generating gifs for Loophead #$id..."
            url_num=$(printf "%02d" ${num_map[$num]})
            bg=0
            while [ $bg -lt 5 ]; do
                file0="${id}/vars/${bg}-0.png"
                file1="${id}/vars/${bg}-1.png"
                file2="${id}/vars/${bg}-2.png"
                file3="${id}/vars/${bg}-3.png"
                new_file="$id/${id}_${bg}_throb_900x900.gif"
                echo "    Generating throbbing brain gif for #$id background $bg..."
                convert -loop 0 -delay 20 $file0 -delay 15 $file1 -delay 10 $file2 -delay 10 $file3 -delay 10 $file2 -delay 15 $file1 -delay 10 $file0 $new_file
                echo "    Adding label to #$id background $bg..."
                convert $new_file -font $font -pointsize 30 -draw "fill $color rectangle ${rect[0]},${rect[1]} ${rect[2]},${rect[3]} fill white text ${text[0]},${text[1]} '${text[2]}'" $new_file
                ((bg++))
            done
            cd $id/vars
            filelist_random=$(ls | sort -R)
            random_file="$root/$id/${id}_random_900x900.gif"
            echo "    Generating random cycle gif for #$id..."
            convert -delay 50 -loop 0 $filelist_random $random_file
            echo "    Adding label to random cycle gif for #$id..."
            convert $random_file -font $font -pointsize 30 -draw "fill $color rectangle ${rect[0]},${rect[1]} ${rect[2]},${rect[3]} fill white text ${text[0]},${text[1]} '${text[2]}'" $random_file
            filelist_sequence=$(ls)
            showcase_file="$root/$id/${id}_showcase_900x900.gif"
            echo "    Generating cycle showcase gif for #$id..."
            convert -delay 50 -loop 0 $filelist_sequence $showcase_file
            echo "    Adding label to showcase gif for #$id..."
            convert $showcase_file -font $font -pointsize 30 -draw "fill $color rectangle ${rect[0]},${rect[1]} ${rect[2]},${rect[3]} fill white text ${text[0]},${text[1]} '${text[2]}'" $showcase_file
            cd $root
            ((num++))
        done
        set=$((set+100))
    done
}

# generate gifs for one loophead
make_one() {
    id=$1
    if [ $id -gt 999 ]; then
        text=(550 50 "LOOPHEAD #$id")
        rect=(525 0 900 75)
    else
        text=(575 50 "LOOPHEAD #$id")
        rect=(550 0 900 75)
    fi
    echo "  Generating gifs for Loophead #$id..."
    num=$(echo ${id: -2} | sed 's/^0*//')
    if [ -z $num ]; then num=100; fi
    set=$((id-num))
    url_num=$(printf "%02d" ${num_map[$num]})
    bg=0
    while [ $bg -lt 5 ]; do
        file0="${id}/vars/${bg}-0.png"
        file1="${id}/vars/${bg}-1.png"
        file2="${id}/vars/${bg}-2.png"
        file3="${id}/vars/${bg}-3.png"
        new_file="$id/${id}_${bg}_throb_900x900.gif"
        echo "  Generating throbbing brain gif for #$id background $bg..."
        convert -loop 0 -delay 20 $file0 -delay 15 $file1 -delay 10 $file2 -delay 10 $file3 -delay 10 $file2 -delay 15 $file1 -delay 10 $file0 $id/${id}_${bg}_throb_900x900.gif
        echo "  Adding label to #$id background $bg..."
        convert $new_file -font $font -pointsize 30 -draw "fill $color rectangle ${rect[0]},${rect[1]} ${rect[2]},${rect[3]} fill white text ${text[0]},${text[1]} '${text[2]}'" $new_file
        ((bg++))
    done
    cd $id/vars
    filelist_random=$(ls | sort -R)
    random_file="$root/$id/${id}_random_900x900.gif"
    echo "  Generating random cycle gif for #$id..."
    convert -delay 50 -loop 0 $filelist_random $random_file
    echo "  Adding label to random cycle gif for #$id..."
    convert $random_file -font $font -pointsize 30 -draw "fill $color rectangle ${rect[0]},${rect[1]} ${rect[2]},${rect[3]} fill white text ${text[0]},${text[1]} '${text[2]}'" $random_file
    filelist_sequence=$(ls)
    showcase_file="$root/$id/${id}_showcase_900x900.gif"
    echo "  Generating cycle showcase gif for #$id..."
    convert -delay 50 -loop 0 $filelist_sequence $showcase_file
    echo "  Adding label to showcase gif for #$id..."
    convert $showcase_file -font $font -pointsize 30 -draw "fill $color rectangle ${rect[0]},${rect[1]} ${rect[2]},${rect[3]} fill white text ${text[0]},${text[1]} '${text[2]}'" $showcase_file
    cd $root
}

# generate gifs for list of loopheads
make_list() {
    for l in $(cat $id_list); do
        make_one $l
    done
}

# generate a "sane" gif of all loopheads
smash_sane_gif() {
    cd $root
    file_list=()
    id=101
    while [ $id -lt $highest_id ]; do
        imgs="$root/$id/vars"
        cd $imgs
        file=$(ls | sort -R | tail -1)
        cd $root
        file_list+=("$imgs/$file")
        ((id++))
    done
    smash_file="$root/smash_sane_900x900.gif"
    echo "  Generating the sane smashed collection gif..."
    convert -delay 25 -loop 0 ${file_list[@]} $smash_file
}

# create a gif of all loopheads
smash_everything_gif() {
    cd $root
    file_list=".temp_list" && touch $file_list
    id=101
    while [ $id -lt $highest_id ]; do
        imgs="$root/$id/vars"
        cd $imgs
        file=$(ls | sort -R | tail -1)
        cd $root
        echo "$imgs/$file" >> $file_list
        ((id++))
    done
    smash_file="$root/smash_chaos_900x900.gif"
    echo "  Generating the chaotically smashed collection gif..."
    random_list=$(cat $file_list | sort -R)
    convert -delay 5 -loop 0 $random_list $smash_file
    rm $file_list
}

# shrink all files to 250x250
shrink_static() {
    find $root -type f -name "*.png" -exec convert "{}" -resize 250x250 "{}" \;
}

# generate a list of loophead IDs that had errors during a download run
gen_list() {
    cat $get_errors | grep "no images defined" | awk '{print $5}' | grep -o -E "[0-9]{4}" | uniq > $id_list
}

# run the script
echo "Running $1 command..."

case $1 in
    all)
        if [ ! -z $2 ]; then
            set=$2
        fi
        get_all 2> $get_errors
        make_all 2> $make_errors
    ;;
    one)
        if [ ! -z $2 ]; then
            get_one $2 2> $get_errors
            make_one $2 2> $make_errors
        else
            echo "You didn't specify an ID: $0 one {ID}"
            exit 1
        fi
    ;;
    list)
        if [ ! -f $id_list ]; then
            echo "Could not find $id_list file."
            exit 1
        else
            get_list 2> $get_errors
            make_list 2> $make_errors
        fi
    ;;
    get_all) get_all;;
    get_one)
        if [ ! -z $2 ]; then
            get_one $2 2> $get_errors
        else
            echo "You didn't specify an ID: $0 one {ID}"
            exit 1
        fi
    ;;
    get_list)
        if [ ! -f $id_list ]; then
            echo "Could not find $id_list file."
            exit 1
        else
            get_list 2> $get_errors
        fi
    ;;
    make_all) make_all;;
    make_one)
        if [ ! -z $2 ]; then
            make_one $2 2> $make_errors
        else
            echo "You didn't specify an ID: $0 make_one {ID}"
            exit 1
        fi
    ;;
    make_list)
        if [ ! -f $id_list ]; then
            echo "Could not find $id_list file."
            exit 1
        else
            make_list 2> $make_errors
        fi
    ;;
    gen_list) gen_list;;
    smash_all) smash_sane_gif 2> $make_errors;;
    smash_chaos) smash_everything_gif 2> $make_errors;;
    shrink) shrink_static 2> $shrink_errors;;
    tail)
        case $2 in
            shrink) tail -f $shrink_errors;;
            make) tail -f $make_errors;;
            *) tail -f $get_errors;;
        esac
    ;;
    *) echo "You didn't specify a command: $0 [all|one|list|get_all|get_one|get_list|make_all|make_one|make_list|smash_all|smash_chaos] {ID}"; exit 1;;
esac

echo "...done!"
