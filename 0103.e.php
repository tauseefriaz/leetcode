/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        return $r = self::rec($nums, 0, count($nums)-1);

        print_r($r);
    }


    static function rec($nums, $l, $h) {
        if($l>$h){
            return null;
        }
        $m = round(($l + $h) / 2);
        $tree = new TreeNode($nums[$m]);
        $tree->left  = self::rec($nums, $l, $m-1);
        $tree->right = self::rec($nums, $m+1, $h);

        return $tree;
    }
}
