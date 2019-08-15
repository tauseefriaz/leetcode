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
     * @return Boolean
     */
    function isSymmetric($root) {
        return self::isMirror($root, $root);
    }

    static function isMirror($t1, $t2) {
        if($t1==null && $t2==null ) return true;
        if($t1==null || $t2==null ) return false;

        return ($t1->val == $t2->val) && self::isMirror($t1->right, $t2->left) && self::isMirror($t1->left, $t2->right);
    }
}
