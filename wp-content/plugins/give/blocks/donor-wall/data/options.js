/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n'

/**
 * Options data for various form selects
 */
const giveDonorWallOptions = {};

// Form Display Styles
giveDonorWallOptions.columns = [
	{ value: '1', label: 'Full width' },
	{ value: '2', label: 'Double' },
	{ value: '3', label: 'Triple' },
    { value: '4', label: 'Max (4)' },
];

// Order
giveDonorWallOptions.order = [
	{ value: 'DESC', label: __( 'Descending', 'give' ) },
	{ value: 'ASC', label: __( 'Ascending', 'give' ) },
];

// Order
giveDonorWallOptions.orderBy = [
	{ value: 'donation_amount', label: __( 'Donation Amount', 'give' ) },
	{ value: 'post_date', label: __( 'Date Created', 'give' ) },
];

//Toggle Switch
giveDonorWallOptions.toggleOptions = [
    { value: 'Donor info', label: __( 'Donor Info', 'give' ) },
    { value: 'Wall attributes', label: __( 'Wall Attributes', 'give' ) },
];

//Filter
giveDonorWallOptions.filter = [
    { value: 'ids', label: __( 'Donor ID', 'give' ) },
    { value: 'formID', label: __( 'Form ID', 'give' ) },
    { value: 'categories', label: __( 'Categories', 'give' ) },
    { value: 'tags', label: __( 'Tags', 'give' ) },
];



export default giveDonorWallOptions;
