# include <stdio.h>

int main () {
    double a;
    double b;
    double c;
    printf("give me the first adge of the triangel\n");
    scanf("%lf",&a);
    printf("give me the second adge of the triangel\n");
    scanf("%lf",&b);
    printf("give me the third edge of the triangel\n");
    scanf("%lf",&c);
    if (a+b>c ){
        if(a+c>b){
            if(b+c>a){
                printf("1\n");
            }
            else{
                printf("0\n");
            }
        }
        else{
            printf("0\n");
        }
        
    }
    else {
        printf("0\n");
    }



return 0;



}

