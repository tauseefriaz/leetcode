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
     * @param Integer $intersectVal
     * @param ListNode $listA
     * @param ListNode $listB
     * @param Integer $skipA
     * @param Integer $skipB
     * @return ListNode
     */
    function getIntersectionNode($intersectVal, $listA, $listB, $skipA, $skipB) {
        //print_r($listA->next);
        $result = $this->findIndex($listA, $listB, $intersectVal);

        if($result){
            //print_r($result);
            return $result;
        }else{
            return null;
        }
    }

    function findIndex($a, $b, $v){
        $ai = 0;
        $bi = 0;
        $count = 0;
        do{
           if($ai && $bi) break;

           if($a->val == $v){
               return $a;
           }

           if($b->val == $v){
               return $b;
           }

           $a = $a->next;
           $b = $b->next;

           $count++;
        }while($a->val || $b->val);

        //return [$ai, $bi];
    }
}
