# include <stdio.h>
int main(){
    int a;
    int b;
    int c;
    printf("give me three naturlich zahle\n");
    scanf("%d %d %d",&a,&b,&c);
    if ((a!=0&&b!=0)||(b!=0&&c!=0)||(a!=0&&c!=0)){
        printf("mindesten 2 naturlich zahle ,die nicht null");
    }
    else{
        printf("gibt es mehr als 2 null zahlen");
    }

}