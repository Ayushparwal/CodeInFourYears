#include<stdio.h>

struct stack{
    int size;
    int top;
    int *S;
};
void push(stack *st,int x){
     if(st->top==st->size-1){
        printf("stack is overflow\n");
     }
     else{
        st->top++;
        st->S[st->top]=x;
     }
}
int pop(stack *st){
    int x=-1;

    if(st->top==-1){
        printf("Stack is empty\n");
    }
    else {
        x=st->S[st->top];
        st->top--;
    }
    return x;
}
int main(){
    struct stack st;
    printf("Enter the size of stack\n");
    scanf("%d",&st.size);
    st.S= new int [st.size];
    st.top=-1;
    
}