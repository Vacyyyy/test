# include <stdio.h>

int main () {
    int a;
    int b;
    int c;
    printf("give me the firt natural number\n");
    scanf("%d",&a);
    printf("give me the second natural number\n");
    scanf("%d",&b);
    printf("give me the third natural number\n");
    scanf("%d",&c);
    if (a!=0 ){
        if(b!=0){
            printf("gibt es ist mindestens 2 naturlich zahle nicht null");
        }
        else{
            if (c!=0) {
                printf("gibt es ist mindestens 2 naturlich zahle nicht null");
            }
            else{
                printf("gibt es mehr als 2 natürlich zahle die null sind ");
            }
        }
        
    }
    else {
        if(b!=0){
            if(c!=0){
                printf("gibt es ist mindestens 2 naturlich zahle nicht null");
            }
            else{
               printf("gibt es mehr als 2 natürlich zahle die null sind "); 
            }
        }
        else{
           printf("gibt es mehr als 2 natürlich zahle die null sind ") ;
        }
    }



return 0;



}