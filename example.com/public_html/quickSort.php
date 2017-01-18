<?php

    function swap($items, $firstIndex, $secondIndex) {
        $temp = $items[$firstIndex];
        $items[$firstIndex] = $items[$secondIndex];
        $items[$secondIndex] = $emp;
    }

    function partition(items, left, right) {

        var pivot   = items[Math.floor((right + left) / 2)],
            i       = left,
            j       = right;


        while (i <= j) {

            while (items[i] < pivot) {
                i++;
            }

            while (items[j] > pivot) {
                j--;
            }

            if (i <= j) {
                swap(items, i, j);
                i++;
                j--;
            }
        }

        return i;
    }
?>
