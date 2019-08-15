/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $pos
     * @return Boolean
     */
    function hasCycle($head, $pos) {

        $count = 0;
        do{
            $count++;
            $head = $head->next;
        }while(isset($head->val));

        if($count>$pos && $pos>=0) return true; else return false;
    }
}
