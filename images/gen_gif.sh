#!/usr/bin/env bash

root=$PWD
ipfs_root="https://loopring.mypinata.cloud/ipfs/"
color="#2d2f4b"
font="$root/ttp.ttf"

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

get_all() {
    set=1100
    subset=100
    while [ $set -lt 2100 ]; do
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
            echo "      Downloading PNGs from IPFS..."
            curl="curl -s --connect-timeout 60 --max-time 300 ${ipfs_root}${ipfs_hashes[$set]}/loophead${url_num}_${subset}"
            orig="$id/original/"
            ${curl}_0_0.png > ${orig}0-0.png &
            ${curl}_0_1.png > ${orig}0-1.png &
            ${curl}_0_2.png > ${orig}0-2.png &
            ${curl}_0_3.png > ${orig}0-3.png &
            ${curl}_0_4.png > ${orig}0-4.png &
            ${curl}_1_0.png > ${orig}1-0.png &
            ${curl}_1_1.png > ${orig}1-1.png &
            ${curl}_1_2.png > ${orig}1-2.png &
            ${curl}_1_3.png > ${orig}1-3.png &
            ${curl}_1_4.png > ${orig}1-4.png &
            ${curl}_2_0.png > ${orig}2-0.png &
            ${curl}_2_1.png > ${orig}2-1.png &
            ${curl}_2_2.png > ${orig}2-2.png &
            ${curl}_2_3.png > ${orig}2-3.png &
            ${curl}_2_4.png > ${orig}2-4.png &
            ${curl}_3_0.png > ${orig}3-0.png &
            ${curl}_3_1.png > ${orig}3-1.png &
            ${curl}_3_2.png > ${orig}3-2.png &
            ${curl}_3_3.png > ${orig}3-3.png &
            ${curl}_3_4.png > ${orig}3-4.png &
            ${curl}_4_0.png > ${orig}4-0.png &
            ${curl}_4_1.png > ${orig}4-1.png &
            ${curl}_4_2.png > ${orig}4-2.png &
            ${curl}_4_3.png > ${orig}4-3.png &
            ${curl}_4_4.png > ${orig}4-4.png
            sleep 4
            echo "      Resizing to 900x900..."
            convert="-alpha remove -resize 900x900 $id/vars/"
            convert ${orig}0-0.png ${convert}0-0.png
            convert ${orig}0-1.png ${convert}0-1.png
            convert ${orig}0-2.png ${convert}0-2.png
            convert ${orig}0-3.png ${convert}0-3.png
            convert ${orig}0-4.png ${convert}0-4.png
            convert ${orig}1-0.png ${convert}1-0.png
            convert ${orig}1-1.png ${convert}1-1.png
            convert ${orig}1-2.png ${convert}1-2.png
            convert ${orig}1-3.png ${convert}1-3.png
            convert ${orig}1-4.png ${convert}1-4.png
            convert ${orig}2-0.png ${convert}2-0.png
            convert ${orig}2-1.png ${convert}2-1.png
            convert ${orig}2-2.png ${convert}2-2.png
            convert ${orig}2-3.png ${convert}2-3.png
            convert ${orig}2-4.png ${convert}2-4.png
            convert ${orig}3-0.png ${convert}3-0.png
            convert ${orig}3-1.png ${convert}3-1.png
            convert ${orig}3-2.png ${convert}3-2.png
            convert ${orig}3-3.png ${convert}3-3.png
            convert ${orig}3-4.png ${convert}3-4.png
            convert ${orig}4-0.png ${convert}4-0.png
            convert ${orig}4-1.png ${convert}4-1.png
            convert ${orig}4-2.png ${convert}4-2.png
            convert ${orig}4-3.png ${convert}4-3.png
            convert ${orig}4-4.png ${convert}4-4.png
            echo "      Deleting originals for #$id..."
            rm -r $id/original
            ((num++))
        done
        set=$((set+100))
        subset=$((subset+100))
    done
}

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
    set=$((id-num))
    url_num=$(printf "%02d" ${num_map[$num]})
    mkdir -p $id/{original,vars}
    echo "    Downloading PNGs from IPFS..."
    curl="curl -s --connect-timeout 60 --max-time 300 ${ipfs_root}${ipfs_hashes[$set]}/loophead${url_num}_${set}"
    orig="$id/original/"
    ${curl}_0_0.png > ${orig}0-0.png &
    ${curl}_0_1.png > ${orig}0-1.png &
    ${curl}_0_2.png > ${orig}0-2.png &
    ${curl}_0_3.png > ${orig}0-3.png &
    ${curl}_0_4.png > ${orig}0-4.png &
    ${curl}_1_0.png > ${orig}1-0.png &
    ${curl}_1_1.png > ${orig}1-1.png &
    ${curl}_1_2.png > ${orig}1-2.png &
    ${curl}_1_3.png > ${orig}1-3.png &
    ${curl}_1_4.png > ${orig}1-4.png &
    ${curl}_2_0.png > ${orig}2-0.png &
    ${curl}_2_1.png > ${orig}2-1.png &
    ${curl}_2_2.png > ${orig}2-2.png &
    ${curl}_2_3.png > ${orig}2-3.png &
    ${curl}_2_4.png > ${orig}2-4.png &
    ${curl}_3_0.png > ${orig}3-0.png &
    ${curl}_3_1.png > ${orig}3-1.png &
    ${curl}_3_2.png > ${orig}3-2.png &
    ${curl}_3_3.png > ${orig}3-3.png &
    ${curl}_3_4.png > ${orig}3-4.png &
    ${curl}_4_0.png > ${orig}4-0.png &
    ${curl}_4_1.png > ${orig}4-1.png &
    ${curl}_4_2.png > ${orig}4-2.png &
    ${curl}_4_3.png > ${orig}4-3.png &
    ${curl}_4_4.png > ${orig}4-4.png
    sleep 4
    echo "    Resizing to 900x900..."
    convert="-alpha remove -resize 900x900 $id/vars/"
    convert ${orig}0-0.png ${convert}0-0.png
    convert ${orig}0-1.png ${convert}0-1.png
    convert ${orig}0-2.png ${convert}0-2.png
    convert ${orig}0-3.png ${convert}0-3.png
    convert ${orig}0-4.png ${convert}0-4.png
    convert ${orig}1-0.png ${convert}1-0.png
    convert ${orig}1-1.png ${convert}1-1.png
    convert ${orig}1-2.png ${convert}1-2.png
    convert ${orig}1-3.png ${convert}1-3.png
    convert ${orig}1-4.png ${convert}1-4.png
    convert ${orig}2-0.png ${convert}2-0.png
    convert ${orig}2-1.png ${convert}2-1.png
    convert ${orig}2-2.png ${convert}2-2.png
    convert ${orig}2-3.png ${convert}2-3.png
    convert ${orig}2-4.png ${convert}2-4.png
    convert ${orig}3-0.png ${convert}3-0.png
    convert ${orig}3-1.png ${convert}3-1.png
    convert ${orig}3-2.png ${convert}3-2.png
    convert ${orig}3-3.png ${convert}3-3.png
    convert ${orig}3-4.png ${convert}3-4.png
    convert ${orig}4-0.png ${convert}4-0.png
    convert ${orig}4-1.png ${convert}4-1.png
    convert ${orig}4-2.png ${convert}4-2.png
    convert ${orig}4-3.png ${convert}4-3.png
    convert ${orig}4-4.png ${convert}4-4.png
    echo "    Deleting originals for #$id..."
    rm -r $id/original
}

get_list() {
    for l in $(cat .id_list); do
        get_one $l
    done
}

make_all() {
    set=1100
    while [ $set -lt 2100 ]; do
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

make_list() {
    for l in $(cat .id_list); do
        make_one $l
    done
}

smash_sane_gif() {
    cd $root
    file_list=()
    id=101
    while [ $id -lt 1101 ]; do
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

smash_everything_gif() {
    cd $root
    file_list=".temp_list" && touch $file_list
    id=101
    while [ $id -lt 1101 ]; do
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
    convert -delay 25 -loop 0 $random_list $smash_file
    rm $file_list
}

shrink_static() {
    find $root -type f -name "*.png" -exec convert "{}" -resize 250x250 "{}" \;
}

echo "Running $1 command..."

case $1 in
    all) get_all; make_all;;
    one)
        if [ ! -z $2 ]; then
            get_one $2
            make_one $2
        else
            echo "You didn't specify an ID: $0 one {ID}"
            exit 1
        fi
    ;;
    list)
        if [ ! -f .id_list ]; then
            echo "Could not find .id_list file."
            exit 1
        else
            get_list
            make_list
        fi
    ;;
    get_all) get_all;;
    get_one)
        if [ ! -z $2 ]; then
            get_one $2
        else
            echo "You didn't specify an ID: $0 one {ID}"
            exit 1
        fi
    ;;
    get_list)
        if [ ! -f .id_list ]; then
            echo "Could not find .id_list file."
            exit 1
        else
            get_list
        fi
    ;;
    make_all) make_all;;
    make_one)
        if [ ! -z $2 ]; then
            make_one $2
        else
            echo "You didn't specify an ID: $0 make_one {ID}"
            exit 1
        fi
    ;;
    make_list)
        if [ ! -f .id_list ]; then
            echo "Could not find .id_list file."
            exit 1
        else
            make_list
        fi
    ;;
    smash_all) smash_sane_gif;;
    smash_chaos) smash_everything_gif;;
    shrink) shrink_static;;
    *) echo "You didn't specify a command: $0 [all|one|list|get_all|get_one|get_list|make_all|make_one|make_list|smash_all|smash_chaos] {ID}"; exit 1;;
esac

echo "...done!"
