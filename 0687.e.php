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
     * @param TreeNode $root
     * @return Integer
     */

    public static $count;
    function longestUnivaluePath($root) {
        self::rec($root);
        return self::$count;
    }

    static function rec($tree){

        if($tree->left == null && $tree->right == null) return 0;
        $l = self::rec($tree->left);
        $r = self::rec($tree->right);
        $larrow = 0;
        $rarrow = 0;
        if($tree->left!= null && $tree->val==$tree->left->val){
            $rarrow += $l+1;
        }

        if($tree->right != null &&$tree->val==$tree->right->val){
            $larrow += $r+1;
        }

        self::$count = max([self::$count, $larrow+$rarrow]);
        return max([$larrow, $rarrow]);
    }
}
